<?php namespace App\Models\Admin;

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
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getNewsById( $id ) {
        $builder = $this->db->table( 'news' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertNews( $data ) {
        $this->builder = $this->db->table( 'news' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateNews( $data, $id ) {
        $this->builder = $this->db->table( 'news' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteNews( $id ) {
        $builder = $this->db->table( 'news' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;