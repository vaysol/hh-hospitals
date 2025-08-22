<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Awards_Model;

class Awards extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Awards_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'awards' ] = $this->model->getAwards();
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Awards/index' );
        echo view( 'Admin/footer' );
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view( 'Admin/header' );
        echo view( 'Admin/Awards/form' );
        echo view( 'Admin/footer' );
    }

    public function edit( $id ) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'awards' ] = $this->model->getAwardById( $id );
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Awards/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost( 'id' ) ) ) {
            // Add
            if ( $this->request->getFile( 'image' ) ) {
                $image = $this->request->getFile( 'image' );
                $imageName = uploadFile( $image, 'assets/images/award/' );
                $data[ 'image' ] = $imageName != NULL ? $imageName : '';
            }

            unset( $data[ 'id' ] );
            unset( $data[ 'image_old' ] );

            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'user_id' );

            $isInsert = $this->model->insertAward( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/awards' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/awards' );
            }
        } else {

            //Edit
            $userId = $data[ 'id' ];
            unset( $data[ 'id' ] );
            unset( $data[ 'image_old' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'user_id' );

            if ( $this->request->getFile( 'image' ) ) {
                $image = $this->request->getFile( 'image' );
                $imageName = uploadFile( $image, 'assets/images/award/' );
                $data[ 'image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'image' ] ) {
                    unset( $data[ 'image' ] );
                }
                // Removing Empty Values
            }
            $isUpdated = $this->model->updateAward( $data, $userId );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/awards/' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/awards/' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deleteAward( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/awards/' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/awards/' );
        }
    }


}