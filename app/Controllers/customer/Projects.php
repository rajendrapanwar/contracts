<?php

namespace App\Controllers\customer;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->projectModel=new ProjectModel();
        
    }
    public function customer_project()
    {

        $data['projects']= $this->projectModel->getAllProjects();
        return view('includes/header').
               view('customer/projects/index',$data).
               view('includes/footer');
    }
    public function add_project()
    {
        return view('includes/header').
               view('customer/projects/add_project').
               view('includes/footer');
    }
    public function edit_project($id)
    {
        $data['project']= $this->projectModel->getProjectbyId($id);
        return view('includes/header').
               view('customer/projects/edit_project',$data).
               view('includes/footer');
    }
    public function add_project_post()
    {
        
        $validationRules = [
            'project_title' => 'required|string|max_length[255]',
            'area_length' => 'required|integer',
            'area_breadth' => 'required|integer',
            'floors' => 'required|integer',
            'material_type' => 'required|string|max_length[255]',
            'estimated_budget' => 'required|decimal',
            'budget' => 'required|decimal',
            'duration' => 'required|string|max_length[255]',
            'location' => 'required|string|max_length[255]',
            // 'notes' => 'required|string|max_length[255]',
            // 'location_image' => 'uploaded[location_image]|is_image[location_image]|max_size[location_image,5MB]',
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, return to login with errors
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }
        $file = $this->request->getFile('location_image');
        $newName = $file->getRandomName();
        $uploadPath = ROOTPATH . 'assets/img/projects';
        $file->move($uploadPath, $newName);

        $data = [
            'project_title' => $this->request->getPost('project_title'),
            'area_length' => $this->request->getPost('area_length'),
            'area_breadth' => $this->request->getPost('area_breadth'),
            'floors' => $this->request->getPost('floors'),
            'material' => $this->request->getPost('material_type'),
            'estimated_budget' => $this->request->getPost('estimated_budget'),
            'customer_budget' => $this->request->getPost('budget'),
            'time_duration' => $this->request->getPost('duration'),
            'location' => $this->request->getPost('location'),
            'notes' => $this->request->getPost('notes'),
            'images' => $newName,
        ];
        $ProjectModel = new ProjectModel();
        if($ProjectModel->save($data)){
            return redirect()->to('/add-project')->with('message', 'Project added successfully!');
        }else {
            return redirect()->to('/add-project')->with('message', 'Failed to add Project.');
        }

    }

    public function edit_project_post($id)
    {
        
        $validationRules = [
            'project_title' => 'required|string|max_length[255]',
            'area_length' => 'required|integer',
            'area_breadth' => 'required|integer',
            'floors' => 'required|integer',
            'material_type' => 'required|string|max_length[255]',
            'estimated_budget' => 'required|decimal',
            'budget' => 'required|decimal',
            'duration' => 'required|string|max_length[255]',
            'location' => 'required|string|max_length[255]',
            // 'notes' => 'required|string|max_length[255]',
            // 'location_image' => 'uploaded[location_image]|is_image[location_image]|max_size[location_image,5MB]',
        ];

        if (!$this->validate($validationRules)) {
            // If validation fails, return to login with errors
            return redirect()->back()->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        if($this->request->getFile('location_image')!=''){
            $file = $this->request->getFile('location_image');
            $newName = $file->getRandomName();
            $uploadPath = ROOTPATH . 'assets/img/projects';
            $file->move($uploadPath, $newName);

            $data = [
                'project_title' => $this->request->getPost('project_title'),
                'area_length' => $this->request->getPost('area_length'),
                'area_breadth' => $this->request->getPost('area_breadth'),
                'floors' => $this->request->getPost('floors'),
                'material' => $this->request->getPost('material_type'),
                'estimated_budget' => $this->request->getPost('estimated_budget'),
                'customer_budget' => $this->request->getPost('budget'),
                'time_duration' => $this->request->getPost('duration'),
                'location' => $this->request->getPost('location'),
                'notes' => $this->request->getPost('notes'),
                'images' => $newName,
            ];
        }else {
            $data = [
                'project_title' => $this->request->getPost('project_title'),
                'area_length' => $this->request->getPost('area_length'),
                'area_breadth' => $this->request->getPost('area_breadth'),
                'floors' => $this->request->getPost('floors'),
                'material' => $this->request->getPost('material_type'),
                'estimated_budget' => $this->request->getPost('estimated_budget'),
                'customer_budget' => $this->request->getPost('budget'),
                'time_duration' => $this->request->getPost('duration'),
                'location' => $this->request->getPost('location'),
                'notes' => $this->request->getPost('notes'),
            ];
        }
        $ProjectModel = new ProjectModel();
        if($ProjectModel->update($id,$data)){
            return redirect()->to('/edit-project/'.$id)->with('message', 'Project Updated successfully!');
        }else {
            return redirect()->to('/edit-project/'.$id)->with('message', 'Failed to add Project.');
        }

    }

    
    
}