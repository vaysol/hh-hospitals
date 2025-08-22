<?php namespace App\Models;
use CodeIgniter\Model;

class Enquiry_Model extends Model {
    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function insertEnquiry( $data ) {
        $this->builder = $this->db->table( 'enquiry' );
        $query = $this->builder->insert( $data );
        return $query;
    }
    public function insertEnquiryNri( $data ) {
        $this->builder = $this->db->table( 'enquiry_nri' );
        $query = $this->builder->insert( $data );
        return $query;
    }
    public function insertEnquiryLoyalty( $data ) {
        $this->builder = $this->db->table( 'enquiry_loyalty_program' );
        $query = $this->builder->insert( $data );
        return $query;
    }
    public function insertEnquiryChannelPartner( $data ) {
        $this->builder = $this->db->table( 'enquiry_channel_partners' );
        $query = $this->builder->insert( $data );
        // echo  $this->db->getLastQuery();exit;
        return $query;
    }
}