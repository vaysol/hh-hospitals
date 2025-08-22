<?php namespace App\Models;

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
        $this->builder->where( 'upcomming !=', 1 );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }
    
    public function getOngoingProjects( $id ) {
        $this->builder = $this->db->table( 'projects' );
        $this->builder->select( '*' );
        $this->builder->where( 'id !=', $id );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    public function getProjectById( $id ) {
        $builder = $this->db->table( 'projects' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function getIdBySlug( $slug ) {
        $builder = $this->db->table( 'projects' );
        $builder->select( 'id' );
        $builder->where( 'slug', $slug );
        $query = $builder->get()->getResultArray()[0]['id'];
        // echo  $this->db->getLastQuery();
        // exit;
        return $query;
    }
    // Highlights

    public function getProjectHighlights() {
        $this->builder = $this->db->table( 'project_highlights' );
        $this->builder->select( '*' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    public function getProjectHighlightsById( $id ) {
        $ids = explode( ',', $id );
        $builder = $this->db->table( 'project_highlights' );
        $this->builder->select( '*' )->whereIn( 'id', $ids );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    // Amenities

    public function getProjectAmenities() {
        $this->builder = $this->db->table( 'project_amenities' );
        $this->builder->select( '*' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    public function getProjectAmenitiesById( $id ) {
        $ids = explode( ',', $id );
        $builder = $this->db->table( 'project_amenities' );
        $this->builder->select( '*' )->whereIn( 'id', $ids );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    //Gallery

    public function getGalleryById( $id ) {
        $builder = $this->db->table( 'project_gallery' );
        $builder->where( 'project_id', $id );
        $query = $builder->get()->getResultArray();
        // echo  $this->db->getLastQuery();
        // exit;
        return $query;
    }
}