<?php namespace App\Models\Admin;
use CodeIgniter\Model;

class Career_Model extends Model {
    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getCareers() {
        $builder = $this->db->table( 'careers' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getCareerById( $id ) {
        $builder = $this->db->table( 'careers' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertCareer( $data ) {
        $this->builder = $this->db->table( 'careers' );
        // print_r($data);exit;
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateCareer( $data, $id ) {
        $this->builder = $this->db->table( 'careers' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteCareer( $id ) {
        $builder = $this->db->table( 'careers' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;