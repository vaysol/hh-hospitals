<?php 

namespace App\Models;

use CodeIgniter\Model;

class Home_Model extends Model 
{
    protected $db;
    protected $session;
    protected $builder;

    public function __construct() 
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    // Home: Banners
    public function getBanners() 
    {
        $this->builder = $this->db->table('banners');
        $this->builder->select('*');
        $this->builder->where('status', 1);
        $this->builder->orderBy('priority', 'Asc');
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    // Home: Featured Projects
    public function getFeaturedProjects() 
    {
        $this->builder = $this->db->table('projects');
        $this->builder->select('*');
        $this->builder->where('featured', 1);
        $this->builder->where('status', 1);
        $this->builder->orderBy('priority', 'Asc');
        $query = $this->builder->get()->getResultArray();
        return $query;
    }
    
    // Home: Upcomming Projects
    
    public function getUpcommingProjects() {
        $this->builder = $this->db->table( 'projects' );
        $this->builder->select( '*' );
        $this->builder->where( 'upcomming', 1 );
        $this->builder->where( 'status', 1 );
        $this->builder->orderBy( 'priority', 'Asc' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    // Home: Projects

    public function getProjects() {
        $this->builder = $this->db->table( 'projects' );
        $this->builder->select( '*' );
        $this->builder->where( 'status', 1 );
        $this->builder->orderBy( 'priority', 'Asc' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }

    // Home: People Behind HH Hospitals

    public function getPeople() {
        $builder = $this->db->table( 'people' );
        $builder->select( '*' );
        $this->builder->where( 'status', 1 );
        $this->builder->orderBy( 'priority', 'Asc' );
        $query = $builder->get()->getResultArray();
        return $query;
    }

    // Home: People Behind HH Hospitals

    public function getClient_Reviews() {
        $this->builder = $this->db->table( 'client_review' );
        $this->builder->select( '*' );
        $this->builder->where( 'status', 1 );
        $this->builder->orderBy( 'priority', 'Asc' );
        $query = $this->builder->get()->getResultArray();
        return $query;
    }
}