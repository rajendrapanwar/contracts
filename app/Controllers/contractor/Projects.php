<?php

namespace App\Controllers\contractor;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\ProjectBidsModel;
use App\Models\UserModel;

class Projects extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->projectModel=new ProjectModel();
        $this->ProjectBidsModel=new ProjectBidsModel();     
        $this->userModel = new UserModel();
        
    }

    private function checkSession()
    {
        if ($this->session->has('isLoggedIn') && $this->session->get('role') != 'contractor') {
            // Redirect to login page if session does not exist
            return false;
        }
        return true;
    }


    public function contractor_project()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/contractor_login')->send();
        }

        $data['projects']= $this->projectModel->getAllProjects();
        return view('includes/header').
               view('contractor/projects/index',$data).
               view('includes/footer');
    }

    public function project_details($id)
    {
        if (!$this->checkSession()) {
            return redirect()->to('/contractor_login')->send();
        }

        $data['project']= $this->projectModel->getProjectbyId($id);
        $data['bids']= $this->ProjectBidsModel->getBidsCount($id);
        $data['user']= $this->userModel->getUserDetailsById($data['project']['user_id']);
        return view('includes/header').
               view('contractor/projects/project_details',$data).
               view('includes/footer');
    }

    public function add_project_bid()
    {
        if (!$this->checkSession()) {
            return redirect()->to('/contractor_login')->send();
        }
        
        $validationRules = [
            'bid_amount' => 'required|integer',
            'delivery_time' => 'required|string|max_length[255]',
            'cover_letter' => 'required|string|max_length[500]',
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, return to login with errors
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }
        $file = $this->request->getFile('file-input');
        $newName = $file->getRandomName();
        $uploadPath = ROOTPATH . 'assets/img/projects';
        $file->move($uploadPath, $newName);
        $user_id=$this->session->get('user_id');
        $project_id=$this->request->getPost('project_id');
        if($this->ProjectBidsModel->check_bid($project_id,$user_id)){
            return redirect()->to('/project-details/'.$project_id)->with('warning_message', 'You Have Already Placed a Bid on this Project.');
        }
        $data = [
            'bid_amount' => $this->request->getPost('bid_amount'),
            'project_id' => $project_id,
            'contractor_id' => $user_id,
            'delivery_time' => $this->request->getPost('delivery_time'),
            'cover_letter' => $this->request->getPost('cover_letter'),
            'files' => $newName,
        ];
       
        if($ProjectBidsModel->save($data)){
            return redirect()->to('/project-details/'.$project_id)->with('success_message', 'Proposal added successfully!');
        }else {
            return redirect()->to('/project-details/'.$project_id)->with('error_message', 'Failed to add Proposal.');
        }
    }
}