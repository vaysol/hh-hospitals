<?php
namespace App\Controllers;
use App\Models\Careers_Model;

class Careers extends BaseController
{
    function __construct() {
        $this->model = new Careers_Model();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['title'] = 'HH Hospitals Careers'; // Adding title to the page
        $data['description'] = 'HH Hospitals Careers jobs'; // Adding description to the page
        $data['css'] = array('careers.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/careers/careers');
        echo view('frontend/header-footer/footer');
    }

    public function CareerOpportunities()
    {
        $data[ 'careers' ] = $this->model->getCareers();

        $data['title'] = 'HH Hospitals Jobs Apply'; // Adding title to the page
        $data['description'] = 'HH Hospitals Jobs Apply'; // Adding description to the page
        $data['css'] = array('career-opportunities.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/careers/career-opportunities');
        echo view('frontend/header-footer/footer');
    }
    public function JobDetail($slug)
    {
        $id = $this->model->getIdBySlug( $slug );
        $data[ 'careers' ] = $this->model->getCareerById( $id )[0];

        $data['title'] = 'HH Hospitals Job '; // Adding title to the page
        $data['description'] = 'HH Hospitals Job Detail'; // Adding description to the page
        $data['css'] = array('job-detail.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/careers/job-detail');
        echo view('frontend/header-footer/footer');
    }
}