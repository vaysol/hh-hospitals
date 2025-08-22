<?php
namespace App\Controllers;
use App\Models\About_Model;

class AboutUs extends BaseController
{
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        helper( 'url' );
        helper( 'form' );
        $this->model = new About_Model();
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        $data['title'] = 'About Us'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('about-us.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/about-us');
        echo view('frontend/header-footer/footer');
    }
    public function ExcellenceBehind()
    {
        $data['title'] = 'About Us'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('excellence-behind.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/excellence-behind');
        echo view('frontend/header-footer/footer');
    }
    public function Awards()
    {
        $data['title'] = 'About Us'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('awards.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/awards');
        echo view('frontend/header-footer/footer');
    }
    public function NriCorner()
    {
        $data['title'] = 'About Us'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('nri-corner.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array('select-country.min.js'); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/nri-corner');
        echo view('frontend/header-footer/footer');
    }
    public function ChannelPartners()
    {
        $data['title'] = 'About Us'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('channel-partners.min.css'); // Adding custom css
        // $data['async_css'] = array('channel-partners-carousel.min.css'); // Adding custom async css
        // $data['scripts'] = array('channel-partners-carousel.js'); // Adding custom js
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/channel-partners');
        echo view('frontend/header-footer/footer');
    }
    public function news_and_media()
    {
        $data['news'] = $this->model->getNews();
        
        $data['title'] = 'News And Media'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('news-and-media.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array('news-and-media.min.js'); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/news-and-media');
        echo view('frontend/header-footer/footer');
    }
    public function ClientReviews()
    {
        $data['client_review_written'] = $this->model->getClientReviewsWritten();
        $data['client_review_video'] = $this->model->getClientReviewsVideo();

        $data['title'] = 'Client Reviews'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('client-reviews.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array('client-reviews.min.js'); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/AboutUs/client-reviews');
        echo view('frontend/header-footer/footer');
    }
}
