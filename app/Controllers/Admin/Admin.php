<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Admin extends Controller {
    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        } else {
            return redirect()->to( '/admin/home' );
        }
    }

    public function logout(){
		session()->destroy();
		return redirect()->to('/admin/login');
	}
}
