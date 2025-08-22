<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Doctors_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getDoctors() {
        $builder = $this->db->table( 'doctors' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getDoctorById( $id ) {
        $builder = $this->db->table( 'doctors' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertDoctor( $data ) {
        $this->builder = $this->db->table( 'doctors' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateDoctor( $data, $id ) {
        $this->builder = $this->db->table( 'doctors' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteDoctor( $id ) {
        $builder = $this->db->table( 'doctors' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;