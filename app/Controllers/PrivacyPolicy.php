<?php

namespace App\Controllers;

class PrivacyPolicy extends BaseController
{
    public function index()
    {
        $data['title'] = 'Privacy Policy'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('privacy-policy.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/privacy-policy');
        echo view('frontend/header-footer/footer');
    }
}
