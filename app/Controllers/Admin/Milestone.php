<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Milestone_Model;

class Milestone extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Milestone_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'milestone' ] = $this->model->getMilestones();
        echo view( 'Admin/header', $data);
        echo view( 'Admin/Milestone/index' );
        echo view( 'Admin/footer' );
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view( 'Admin/header' );
        echo view( 'Admin/Milestone/form' );
        echo view( 'Admin/footer' );
    }

    public function edit( $id ) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'milestone' ] = $this->model->getMilestoneById( $id );
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Milestone/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost( 'milestone_id' ) ) ) {
            // Add

            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'milestone_id' );

            $isInsert = $this->model->insertMilestone( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/milestone' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/milestone' );
            }
        } else {
            //Edit
            $milestoneId = $data[ 'milestone_id' ];
            unset( $data[ 'milestone_id' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'milestone_id' );

            $isUpdated = $this->model->updateMilestone( $data, $milestoneId );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/milestone/' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/milestone/' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deleteMilestone( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/milestone/' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/milestone/' );
        }
    }

}