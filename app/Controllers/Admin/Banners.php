<?php
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Banner_Model;

class Banners extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Banner_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'banners' ] = $this->model->getBanners();
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Banners/index' );
        echo view( 'Admin/footer' );
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view( 'Admin/header' );
        echo view( 'Admin/Banners/form' );
        echo view( 'Admin/footer' );
    }

    public function edit( $id ) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'banners' ] = $this->model->getBannerById( $id );
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Banners/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost( 'id' ) ) ) {
            // Add
            if ( $this->request->getFile( 'desktop_image' ) ) {
                $image = $this->request->getFile( 'desktop_image' );
                $imageName = uploadFile( $image, 'assets/images/banner/desktop/' );
                $data[ 'desktop_image' ] = $imageName != NULL ? $imageName : '';
            }
            if ( $this->request->getFile( 'mobile_image' ) ) {
                $image = $this->request->getFile( 'mobile_image' );
                $imageName = uploadFile( $image, 'assets/images/banner/mobile/' );
                $data[ 'mobile_image' ] = $imageName != NULL ? $imageName : '';
            }
            unset( $data[ 'id' ] );
            unset( $data[ 'desktop_image_old' ] );
            unset( $data[ 'mobile_image_old' ] );
            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'user_id' );

            $isInsert = $this->model->insertBanner( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/banners' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/banners' );
            }
        } else {
            //Edit
            $bannerId = $data[ 'id' ];
            unset( $data[ 'id' ] );
            unset( $data[ 'desktop_image_old' ] );
            unset( $data[ 'mobile_image_old' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'user_id' );

            if ( $this->request->getFile( 'desktop_image' ) ) {
                $image = $this->request->getFile( 'desktop_image' );
                $imageName = uploadFile( $image, 'assets/images/banner/desktop/' );
                $data[ 'desktop_image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'desktop_image' ] ) {
                    unset( $data[ 'desktop_image' ] );
                }
                // Removing Empty Values
            }
            if ( $this->request->getFile( 'mobile_image' ) ) {
                $image = $this->request->getFile( 'mobile_image' );
                $imageName = uploadFile( $image, 'assets/images/banner/mobile/' );
                $data[ 'mobile_image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'mobile_image' ] ) {
                    unset( $data[ 'mobile_image' ] );
                }
                // Removing Empty Values
            }
            $isUpdated = $this->model->updateBanner( $data, $bannerId );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/banners' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/banners' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deleteBanner( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/banners' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/banners' );
        }
    }

}