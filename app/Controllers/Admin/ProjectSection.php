<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class ProjectSection extends Controller {
    function __construct() {
        helper('custom');
        // $this->model = new ProjectSection_Model();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view( 'Admin/header' );
        echo view( 'Admin/ProjectSection/index' );
        echo view( 'Admin/footer' );
    }
}