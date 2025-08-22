<?php

namespace App\Controllers;

class LoyaltyProgram extends BaseController
{
    public function index()
    {
        $data['title'] = 'Loyalty Program HH Hospitals'; // Adding title to the page
        $data['description'] = 'HH Hospitals Loyalty Program'; // Adding description to the page
        $data['css'] = array('loyalty-program.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/loyalty-program');
        echo view('frontend/header-footer/footer');
    }
}
