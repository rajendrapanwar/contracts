<?php namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'project_title', 'area_length','area_breadth', 'floors', 'material',
        'estimated_budget', 'customer_budget', 'time_duration', 'location','notes', 'images'
    ];

    protected $useTimestamps = false; // Adjust if you have timestamps

    public function getAllProjects(){
        return $this->findAll();
    }
}