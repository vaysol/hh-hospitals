<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class ProjectAmenities_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

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

    public function insertProjectAmenities( $data ) {
        $this->builder = $this->db->table( 'project_amenities' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateProjectAmenities( $data, $id ) {
        $this->builder = $this->db->table( 'project_amenities' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteProjectAmenities( $id ) {
        $builder = $this->db->table( 'project_amenities' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;