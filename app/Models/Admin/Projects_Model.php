<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Projects_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getProjects() {
       $this->builder = $this->db->table( 'projects' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getProjectById( $id ) {
        $builder = $this->db->table( 'projects' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertProject( $data ) {
        $this->builder = $this->db->table( 'projects' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateProject( $data, $id ) {
        $this->builder = $this->db->table( 'projects' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteProject( $id ) {
        $builder = $this->db->table( 'projects' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }

    // Highlights
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

    // Amenities
    public function getProjectAmenities() {
        $this->builder = $this->db->table( 'project_amenities' );
        $this->builder->select( '*' );
         $query =$this->builder->get()->getResultArray();
         return $query;
     }
 
     public function getProjectAmenitiesById( $id ) {
         $builder = $this->db->table( 'project_amenities' );
         $builder->where( 'id', $id );
         return $builder->get()->getResultArray();
     }
}

// echo  $this->db->getLastQuery();
// exit;