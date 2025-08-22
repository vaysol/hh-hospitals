<?php

namespace App\Controllers;

class ThankYou extends BaseController
{
    public function index()
    {
        $data['title'] = 'Thank You'; // Adding title to the page
        $data['description'] = 'HH Hospitals Thank You'; // Adding description to the page
        $data['css'] = array('thankyou.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/thank-you');
        echo view('frontend/header-footer/footer');
    }
}
