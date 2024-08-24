<?php

namespace App\Controllers\contractor;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->projectModel=new ProjectModel();
        
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
        return view('includes/header').
               view('contractor/projects/project_details',$data).
               view('includes/footer');
    }
}