<?php namespace App\Models\Admin;
use CodeIgniter\Model;

class Banner_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getBanners() {
       $this->builder = $this->db->table( 'banners' );
       $this->builder->select( '*' );
        $query =$this->builder->get()->getResultArray();
        return $query;
    }

    public function getBannerById( $id ) {
        $builder = $this->db->table( 'banners' );
        $builder->where( 'id', $id );
        return $builder->get()->getResultArray();
    }

    public function insertBanner( $data ) {
        $this->builder = $this->db->table( 'banners' );
        $query = $this->builder->insert( $data );
        // echo  $this->db->getLastQuery();exit;
        return $query;
    }

    public function updateBanner( $data, $id ) {
        $this->builder = $this->db->table( 'banners' );
        $this->builder->where( 'id', $id );
        $query = $this->builder->update( $data );
        return $query;
    }

    public function deleteBanner( $id ) {
        $builder = $this->db->table( 'banners' );
        $builder->where( 'id', $id );
        $query = $builder->delete();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;