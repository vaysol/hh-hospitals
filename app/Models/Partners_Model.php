<?php namespace App\Models;

use CodeIgniter\Model;

class Partners_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getPartners() {
        $this->builder = $this->db->table( 'gallery' );
        $this->builder->select( '*' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    public function getPartnersById( $id ) {
        $builder = $this->db->table( 'gallery' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function getIdBySlug( $slug ) {
        $builder = $this->db->table( 'gallery' );
        $builder->select( 'id' );
        $builder->where( 'slug', $slug );
        $query = $builder->get()->getResultArray()[0]['id'];
        return $query;
    }
}