<?php namespace App\Models\Admin;
use CodeIgniter\Model;

class Partners_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getPartners() {
        $builder = $this->db->table( 'partners' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getPartnerById( $id ) {
        $builder = $this->db->table( 'partners' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertPartner( $data ) {
        $this->builder = $this->db->table( 'partners' );
        $query = $this->builder->insert( $data );
        
// echo  $this->db->getLastQuery();
// exit;
        return $this->db->insertID();

    }

    public function updatePartner( $data, $id ) {
        $this->builder = $this->db->table( 'partners' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deletePartner( $id ) {
        $builder = $this->db->table( 'partners' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;