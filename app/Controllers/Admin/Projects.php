<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Projects_Model;

class Projects extends Controller {
    function __construct() {
        helper('custom');
        $this->model = new Projects_Model();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        } 

        echo view( 'Admin/header' );
        echo view( 'Admin/Projects/index' );
        echo view( 'Admin/footer' );
    }

    public function list()
    {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data[ 'projects' ] = $this->model->getProjects();
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Projects/list' );
        echo view( 'Admin/footer' );
    }
    
    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data['all_amenities'] = $this->model->getProjectAmenities();
        $data[ 'all_highlights' ] = $this->model->getProjectHighlights();
        
        echo view( 'Admin/header', $data );
        echo view( 'Admin/Projects/form' );
        echo view( 'Admin/footer' );
    }
    public function edit($id) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        
        $data[ 'projects' ] = $this->model->getProjectById( $id );
        $data['all_amenities'] = $this->model->getProjectAmenities();
        $data[ 'project_amenities' ] = $this->model->getProjectAmenitiesById($id);
        $data[ 'all_highlights' ] = $this->model->getProjectHighlights();
        $data[ 'project_highlights' ] = $this->model->getProjectAmenitiesById($id);

        echo view( 'Admin/header', $data );
        echo view( 'Admin/Projects/form' );
        echo view( 'Admin/footer' );
    }

    public function save() {
        $data = $this->request->getPost();
        if ($data[ 'project_amenities' ]) {
            $data[ 'project_amenities' ] = implode(", ", $data[ 'project_amenities' ]);
        }
        if ($data[ 'project_highlights' ]) {
            $data[ 'project_highlights' ] = implode(", ", $data[ 'project_highlights' ]);
        }

        if ( empty( $this->request->getPost( 'id' ) ) ) {
            // Add
            if ( $this->request->getFile( 'desktop_image' ) ) {
                $image = $this->request->getFile( 'desktop_image' );
                $imageName = uploadFile( $image, 'assets/images/project/desktop/thumbnail/' );
                $data[ 'desktop_image' ] = $imageName != NULL ? $imageName : '';
            }
            if ( $this->request->getFile( 'mobile_image' ) ) {
                $image = $this->request->getFile( 'mobile_image' );
                $imageName = uploadFile( $image, 'assets/images/project/mobile/thumbnail/' );
                $data[ 'mobile_image' ] = $imageName != NULL ? $imageName : '';
            }
            if ( $this->request->getFile( 'desktop_inner_image' ) ) {
                $image = $this->request->getFile( 'desktop_inner_image' );
                $imageName = uploadFile( $image, 'assets/images/project/desktop/inner/' );
                $data[ 'desktop_inner_image' ] = $imageName != NULL ? $imageName : '';
            }
            if ( $this->request->getFile( 'mobile_inner_image' ) ) {
                $image = $this->request->getFile( 'mobile_inner_image' );
                $imageName = uploadFile( $image, 'assets/images/project/mobile/inner/' );
                $data[ 'mobile_inner_image' ] = $imageName != NULL ? $imageName : '';
            }
            unset( $data[ 'id' ] );
            unset( $data[ 'desktop_image_old' ] );
            unset( $data[ 'mobile_image_old' ] );
            $data[ 'create_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'created_by' ] = session()->get( 'user_id' );

            // print_r($data);exit;
            $isInsert = $this->model->insertProject( $data );
            if ( $isInsert ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/list' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Insert.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/list' );
            }
        } else {
            //Edit
            $projectId = $data[ 'id' ];
            unset( $data[ 'id' ] );
            unset( $data[ 'desktop_image_old' ] );
            unset( $data[ 'mobile_image_old' ] );

            $data[ 'modified_date' ] = date( 'Y-m-d H:i:s' );
            $data[ 'modified_by' ] = session()->get( 'user_id' );

            if ( $this->request->getFile( 'desktop_image' ) ) {
                $image = $this->request->getFile( 'desktop_image' );
                $imageName = uploadFile( $image, 'assets/images/project/desktop/thumbnail/' );
                $data[ 'desktop_image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'desktop_image' ] ) {
                    unset( $data[ 'desktop_image' ] );
                }
                // Removing Empty Values
            }
            if ( $this->request->getFile( 'mobile_image' ) ) {
                $image = $this->request->getFile( 'mobile_image' );
                $imageName = uploadFile( $image, 'assets/images/project/mobile/thumbnail/' );
                $data[ 'mobile_image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'mobile_image' ] ) {
                    unset( $data[ 'mobile_image' ] );
                }
                // Removing Empty Values
            }
            if ( $this->request->getFile( 'desktop_inner_image' ) ) {
                $image = $this->request->getFile( 'desktop_inner_image' );
                $imageName = uploadFile( $image, 'assets/images/project/desktop/inner' );
                $data[ 'desktop_inner_image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'desktop_inner_image' ] ) {
                    unset( $data[ 'desktop_inner_image' ] );
                }
                // Removing Empty Values
            }
            if ( $this->request->getFile( 'mobile_inner_image' ) ) {
                $image = $this->request->getFile( 'mobile_inner_image' );
                $imageName = uploadFile( $image, 'assets/images/project/mobile/inner' );
                $data[ 'mobile_inner_image' ] = $imageName != NULL ? $imageName : '';
                if ( !$data[ 'mobile_inner_image' ] ) {
                    unset( $data[ 'mobile_inner_image' ] );
                }
                // Removing Empty Values
            }
            $isUpinner_dated = $this->model->updateProject( $data, $projectId );
            if ( $isUpdated ) {
                $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Save Changes Updated Successfully' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/list' );
            } else {
                $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Update.' );
                session()->setFlashdata( 'msg', $msg );
                return redirect()->to( '/admin/projects/list' );
            }
        }
    }

    public function delete( $id ) {
        $query = $this->model->deleteProject( $id );
        if ( $query ) {
            $msg = array( 'type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Deleted Successfully' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/projects/list' );
        } else {
            $msg = array( 'type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to Delete.' );
            session()->setFlashdata( 'msg', $msg );
            return redirect()->to( '/admin/projects/list' );
        }
    }

}