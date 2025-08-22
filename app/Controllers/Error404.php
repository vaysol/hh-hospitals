<?php

namespace App\Controllers;

class Error404 extends BaseController
{
    public function index()
    {
        $data['title'] = '404 Error'; // Adding title to the page
        $data['description'] = 'HH Hospitals 404 Error'; // Adding description to the page
        $data['css'] = array('error-404.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/error-404');
        echo view('frontend/header-footer/footer');
    }
}
