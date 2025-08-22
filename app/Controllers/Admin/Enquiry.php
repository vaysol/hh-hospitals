<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Enquiry_Model;

class Enquiry extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Enquiry_Model();
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'enquiry' ] = $this->model->getEnquiry();
        echo view( 'Admin/header',$data );
        echo view( 'Admin/Enquiry/index' );
        echo view( 'Admin/footer' );
    }
}