<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\ProjectResources_Model;

class ProjectResources extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new ProjectResources_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'project_resources' ] = $this->model->getProjectResources();
        echo view( 'Admin/header', $data );
        echo view( 'Admin/ProjectResources/index' );
        echo view( 'Admin/footer' );
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'all_projects' ] = $this->model->getProjects();

        echo view( 'Admin/header', $data );
        echo view( 'Admin/ProjectResources/form' );
        echo view( 'Admin/footer' );
    }

    public function edit( $id ) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'project_resources' ] = $this->model->getProjectResourcesById( $id );
        $data[ 'all_projects' ] = $this->model->getProjects();

        echo view( 'Admin/header', $data );
        echo view( 'Admin/ProjectResources/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost( 'id' ) ) ) {
            // Add

            if ( $this->request->getFile( 'document' ) ) {
                $document = $this->request->getFile( 'document' );
                $documentName = uploadDocument( $document, 'assets/images/project_resources/document/' );
                $data[ 'document' ] = $documentName != NULL ? $documentName : '';
            }

            unset( $data[ 'id' ] );
            unset( $data[ 'image_old' ] );

            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'user_id' );

            $isInsert = $this->model->insertProjectResources( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/resources' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/resources' );
            }
        } else {

            //Edit
            $id = $data[ 'id' ];
            unset( $data[ 'id' ] );
            unset( $data[ 'image_old' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'user_id' );

            if ( $this->request->getFile( 'document' ) ) {
                $document = $this->request->getFile( 'document' );
                $documentName = uploadDocument( $document, 'assets/images/project_resources/document/' );
                $data[ 'document' ] = $documentName != NULL ? $documentName : '';
                if ( !$data[ 'document' ] ) {
                    unset( $data[ 'document' ] );
                }
            }

            $isUpdated = $this->model->updateProjectResources( $data, $id );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/resources/' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/resources/' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deleteProjectResources( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/projects/resources/' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/projects/resources/' );
        }
    }

}