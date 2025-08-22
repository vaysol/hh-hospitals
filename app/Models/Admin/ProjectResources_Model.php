<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class ProjectResources_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getProjects() {
        $this->builder = $this->db->table( 'projects' );
        $this->builder->select( '*' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }
    
    public function getProjectResources() {
       $this->builder = $this->db->table( 'project_resources' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getProjectResourcesById( $id ) {
        $builder = $this->db->table( 'project_resources' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertProjectResources( $data ) {
        $this->builder = $this->db->table( 'project_resources' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateProjectResources( $data, $id ) {
        $this->builder = $this->db->table( 'project_resources' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteProjectResources( $id ) {
        $builder = $this->db->table( 'project_resources' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;