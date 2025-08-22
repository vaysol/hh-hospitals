<?php namespace App\Models;

use CodeIgniter\Model;

class About_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getNews() {
        $this->builder = $this->db->table( 'news' );
        $this->builder->select( '*' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    public function getClientReviewsWritten() {
        $builder = $this->db->table( 'client_review' );
        $builder->where( 'type', 1 );
        return $builder->get()->getResultArray();
    }

    public function getClientReviewsVideo() {
        $builder = $this->db->table( 'client_review' );
        $builder->where( 'type', 2 );
        return $builder->get()->getResultArray();
    }

    public function getIdBySlug( $slug ) {
        $builder = $this->db->table( 'blogs' );
        $builder->select( 'id' );
        $builder->where( 'slug', $slug );
        $query = $builder->get()->getResultArray()[0]['id'];
        return $query;
    }
}
        // echo  $this->db->getLastQuery();
        // exit;