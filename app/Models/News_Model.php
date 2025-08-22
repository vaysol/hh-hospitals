<?php namespace App\Models;

use CodeIgniter\Model;

class News_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getNews() {
        $this->builder = $this->db->table( 'news' );
        $this->builder->select( '*' );
        // $this->builder->where( 'id !=', $id );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    public function getNewsById( $id ) {
        $builder = $this->db->table( 'news' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function getIdBySlug( $slug ) {
        $builder = $this->db->table( 'news' );
        $builder->select( 'id' );
        $builder->where( 'slug', $slug );
        $query = $builder->get()->getResultArray()[0]['id'];
        // echo  $this->db->getLastQuery();
        // exit;
        return $query;
    }
}