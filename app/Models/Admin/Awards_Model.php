<?php namespace App\Models\Admin;
use CodeIgniter\Model;

class Awards_Model extends Model {
    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getAwards() {
        $builder = $this->db->table( 'awards' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getAwardById( $id ) {
        $builder = $this->db->table( 'awards' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertAward( $data ) {
        $this->builder = $this->db->table( 'awards' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateAward( $data, $id ) {
        $this->builder = $this->db->table( 'awards' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteAward( $id ) {
        $builder = $this->db->table( 'awards' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;