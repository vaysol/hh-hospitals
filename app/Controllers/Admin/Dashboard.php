<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Dashboard extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data['session'] = $this->session->get();
        echo view( 'Admin/header', $data);
        echo view( 'Admin/dashboard' );
        echo view( 'Admin/footer' );
    }
}
