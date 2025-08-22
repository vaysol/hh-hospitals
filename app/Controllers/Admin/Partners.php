<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Partners_Model;

class Partners extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Partners_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'partners' ] = $this->model->getPartners();
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Partners/index' );
        echo view( 'Admin/footer' );
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view( 'Admin/header' );
        echo view( 'Admin/Partners/form' );
        echo view( 'Admin/footer' );
    }

    public function edit( $id ) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'partners' ] = $this->model->getPartnerById( $id );
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Partners/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost( 'partners_id' ) ) ) {
            // Add
            if ( $this->request->getFile( 'image' ) ) {
                $image = $this->request->getFile( 'image' );
                $imageName = uploadFile( $image, 'assets/images/partner/' );
                $data[ 'image' ] = $imageName != NULL ? $imageName : '';
            }

            unset( $data[ 'partners_id' ] );
            unset( $data[ 'image_old' ] );

            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'user_id' );

            $isInsert = $this->model->insertPartner( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/partners' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/partners' );
            }
        } else {

            //Edit
            $userId = $data[ 'partners_id' ];
            unset( $data[ 'partners_id' ] );
            unset( $data[ 'image_old' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'user_id' );

            if ( $this->request->getFile( 'image' ) ) {
                $image = $this->request->getFile( 'image' );
                $imageName = uploadFile( $image, 'assets/images/partner/' );
                $data[ 'image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'image' ] ) {
                    unset( $data[ 'image' ] );
                }
                // Removing Empty Values
            }
            $isUpdated = $this->model->updatePartner( $data, $userId );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/partners/' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/partners/' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deletePartner( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/partners/' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/partners/' );
        }
    }


}