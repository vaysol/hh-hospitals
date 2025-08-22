<?php

namespace App\Controllers;

use App\Models\Home_Model;

class Home extends BaseController
{
    protected $db;
    protected $model;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->model = new Home_Model();
    }

    public function index()
    {
        $data['banners'] = $this->model->getBanners();
        $data['featured_projects'] = $this->model->getFeaturedProjects();
        $data['projects'] = $this->model->getUpcommingProjects();
        $data['people'] = $this->model->getPeople();
        $data['client_review'] = $this->model->getClient_Reviews();

        $data['title'] = 'HH Hospitals'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('home.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array('home.min.js'); // Adding custom async js

        return view('frontend/header-footer/header', $data)
            . view('frontend/home')
            . view('frontend/header-footer/footer');
    }
}
