<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class ProjectHighlights_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getProjectHighlights() {
       $this->builder = $this->db->table( 'project_highlights' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getProjectHighlightsById( $id ) {
        $builder = $this->db->table( 'project_highlights' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertProjectHighlights( $data ) {
        $this->builder = $this->db->table( 'project_highlights' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateProjectHighlights( $data, $id ) {
        $this->builder = $this->db->table( 'project_highlights' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteProjectHighlights( $id ) {
        $builder = $this->db->table( 'project_highlights' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;