<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Enquiry_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getEnquiry() {
        $builder = $this->db->table( 'enquiry' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getEnquiryById( $id ) {
        $builder = $this->db->table( 'enquiry' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertEnquiry( $data ) {
        $this->builder = $this->db->table( 'enquiry' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateEnquiry( $data, $id ) {
        $this->builder = $this->db->table( 'enquiry' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteEnquiry( $id ) {
        $builder = $this->db->table( 'enquiry' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;