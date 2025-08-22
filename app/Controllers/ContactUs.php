<?php

namespace App\Controllers;
use App\Models\Enquiry_Model;

class ContactUs extends BaseController {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Enquiry_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        helper( 'url' );
        helper( 'form' );
        $data[ 'title' ] = 'Contact Us HH Hospitals';
        // Adding title to the page
        $data[ 'description' ] = 'HH Hospitals';
        // Adding description to the page
        $data[ 'css' ] = array( 'contact-us.min.css' );
        // Adding custom css
        $data[ 'async_css' ] = array();
        // Adding custom async css
        $data[ 'scripts' ] = array();
        // Adding custom js
        $data[ 'async_scripts' ] = array();
        $data[ 'defer_scripts' ] = array('custom_recaptcha.js');
        // Adding custom async js
        echo view( 'frontend/header-footer/header', $data );
        echo view( 'frontend/contact-us' );
        echo view( 'frontend/header-footer/footer' );
    }
}