<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class People_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getPeople() {
        $builder = $this->db->table( 'people' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getPeopleById( $id ) {
        $builder = $this->db->table( 'people' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertPeople( $data ) {
        $this->builder = $this->db->table( 'people' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updatePeople( $data, $id ) {
        $this->builder = $this->db->table( 'people' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deletePeople( $id ) {
        $builder = $this->db->table( 'people' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;