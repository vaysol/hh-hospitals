<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Client_Review_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getClient_Reviews() {
       $this->builder = $this->db->table( 'client_review' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getClient_ReviewById( $id ) {
        $builder = $this->db->table( 'client_review' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertClient_Review( $data ) {
        $this->builder = $this->db->table( 'client_review' );
        $query = $this->builder->insert( $data );

// echo  $this->db->getLastQuery();
// exit;
        return $this->db->insertID();
    }

    public function updateClient_Review( $data, $id ) {
        $this->builder = $this->db->table( 'client_review' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteClient_Review( $id ) {
        $builder = $this->db->table( 'client_review' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;