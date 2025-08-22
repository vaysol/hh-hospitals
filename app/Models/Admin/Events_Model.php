<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Events_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getEvents() {
       $this->builder = $this->db->table( 'events' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getEventById( $id ) {
        $builder = $this->db->table( 'events' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertEvent( $data ) {
        $this->builder = $this->db->table( 'events' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateEvent( $data, $id ) {
        $this->builder = $this->db->table( 'events' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteEvent( $id ) {
        $builder = $this->db->table( 'events' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;