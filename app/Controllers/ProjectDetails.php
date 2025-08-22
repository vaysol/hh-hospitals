<?php
namespace App\Controllers;
use App\Models\Projects_Model;

class ProjectDetails extends BaseController
{

    function __construct() {
        $this->model = new Projects_Model();
        $this->session = \Config\Services::session();
    }

    public function index($slug)
    {    
        $id = $this->model->getIdBySlug( $slug );
        
        $data[ 'project' ] = $this->model->getProjectById( $id )[0];

        $project_amenities_id = $data[ 'project' ][ 'project_amenities' ];
        $data[ 'all_amenities' ] = $this->model->getProjectAmenities();
        $data[ 'project_amenities' ] = $this->model->getProjectAmenitiesById( $project_amenities_id );
        
        $project_highlights_id = $data[ 'project' ][ 'project_highlights' ];
        $data[ 'all_highlights' ] = $this->model->getProjectHighlights();
        $data[ 'project_highlights' ] = $this->model->getProjectAmenitiesById( $project_highlights_id );
        
        $data[ 'ongoing_projects' ] = $this->model->getProjects($id);
        $data[ 'project_gallery' ] = $this->model->getGalleryById( $id );
        
        $data['title'] = 'Project Details'; // Adding title to the page
        $data['description'] = 'HH Hospitals'; // Adding description to the page
        $data['css'] = array('projects-details.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array('project-details.min.js'); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js

        echo view('frontend/header-footer/header',$data);
        echo view('frontend/Projects/project-details');
        echo view('frontend/header-footer/footer');
    }

    public function ProjectsList()
    {
        $data[ 'projects' ] = $this->model->getProjects();
        $data['title'] = 'HH Hospitals '; // Adding title to the page
        $data['description'] = 'HH Hospitals List'; // Adding description to the page
        $data['css'] = array('projects-list.min.css'); // Adding custom css
        $data['async_css'] = array(); // Adding custom async css
        $data['scripts'] = array(); // Adding custom js
        $data['async_scripts'] = array();
        $data['defer_scripts'] = array(); // Adding custom async js
        echo view('frontend/header-footer/header',$data);
        echo view('frontend/Projects/projects-list');
        echo view('frontend/header-footer/footer');
    }
}
