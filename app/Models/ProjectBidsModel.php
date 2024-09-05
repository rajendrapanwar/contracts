<?php namespace App\Models;

use CodeIgniter\Model;

class ProjectBidsModel extends Model
{
    protected $table = 'project_bids';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'project_id', 'contractor_id','bid_amount', 'cover_letter', 'delivery_time','files'
    ];

    protected $useTimestamps = false; // Adjust if you have timestamps

    public function check_bid($project_id,$user_id){
        return $this->where('project_id',$project_id)
                ->where('contractor_id',$user_id)->first();
    }

    public function getBidsCount($id){
        return $this->where('project_id', $id)->countAllResults();
    }
}