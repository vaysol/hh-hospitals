<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Users_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getUsers() {
        $builder = $this->db->table( 'admin_users' );
        $builder->select( '*' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getUserById( $id ) {
        $builder = $this->db->table( 'admin_users' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertUser( $data ) {
        $this->builder = $this->db->table( 'admin_users' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateUser( $data, $id ) {
        $this->builder = $this->db->table( 'admin_users' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteUser( $id ) {
        $builder = $this->db->table( 'admin_users' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;