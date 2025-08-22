<?php namespace App\Models\Admin;
use CodeIgniter\Model;

class Milestone_Model extends Model {
    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getMilestones() {
        $builder = $this->db->table( 'milestone' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getMilestoneById( $id ) {
        $builder = $this->db->table( 'milestone' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertMilestone( $data ) {
        $this->builder = $this->db->table( 'milestone' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateMilestone( $data, $id ) {
        $this->builder = $this->db->table( 'milestone' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteMilestone( $id ) {
        $builder = $this->db->table( 'milestone' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;