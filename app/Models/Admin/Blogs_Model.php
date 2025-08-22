<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Blogs_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getBlogs() {
       $this->builder = $this->db->table( 'blogs' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getBlogById( $id ) {
        $builder = $this->db->table( 'blogs' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertBlog( $data ) {
        $this->builder = $this->db->table( 'blogs' );
        $query = $this->builder->insert( $data );
        return $this->db->insertID();
    }

    public function updateBlog( $data, $id ) {
        $this->builder = $this->db->table( 'blogs' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteBlog( $id ) {
        $builder = $this->db->table( 'blogs' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;