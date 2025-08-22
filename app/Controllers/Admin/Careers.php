<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Career_Model;

class Careers extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Career_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'career' ] = $this->model->getCareers();
        echo view( 'Admin/header', $data);
        echo view( 'Admin/Career/index' );
        echo view( 'Admin/footer' );
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view( 'Admin/header' );
        echo view( 'Admin/Career/form' );
        echo view( 'Admin/footer' );
    }

    public function edit( $id ) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'career' ] = $this->model->getCareerById( $id );
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Career/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost( 'id' ) ) ) {
            // Add

            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'user_id' );

            $isInsert = $this->model->insertCareer( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/careers' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/careers' );
            }
        } else {
            //Edit
            $careerId = $data[ 'id' ];
            unset( $data[ 'id' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'user_id' );

            $isUpdated = $this->model->updateCareer( $data, $careerId );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/careers/' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/careers/' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deleteCareer( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/careers/' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/careers/' );
        }
    }

}