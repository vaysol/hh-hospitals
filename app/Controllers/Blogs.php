<?php
namespace App\Controllers;
use App\Models\Blogs_Model;

class Blogs extends BaseController
{
    function __construct() {
        $this->model = new Blogs_Model();
        $this->session = \Config\Services::session();
    }
  public function index()
    {
        $data[ 'blogs' ] = $this->model->getBlogs();
        $data['title'] = 'HH Hospitals Blogs list'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('blogs-list.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/blog-list');
        echo view('frontend/header-footer/footer');
    }
    public function Blogs_inner($slug)
    {
        $id = $this->model->getIdBySlug( $slug );
        $data[ 'blogs' ] = $this->model->getBlogById( $id )[ 0 ];

        $data['title'] = 'HH Hospitals Blogs list'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('blogs-inner.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/blogs-inner');
        echo view('frontend/header-footer/footer');
    }
}