<?php namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id','project_title', 'area_length','area_breadth', 'floors', 'material',
        'estimated_budget', 'customer_budget', 'time_duration', 'location','notes', 'images'
    ];

    protected $useTimestamps = false; // Adjust if you have timestamps

    public function getAllProjects(){
        return $this->findAll();
    }

    public function getProjectbyId($id){
        return $this->where('id',$id)->first();
    }
    public function getProjectbyUserId($id){
        return $this->where('user_id',$id)->findAll();
    }
}