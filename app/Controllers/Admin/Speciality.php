<?php 
namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\Admin\Speciality_Model;

class Speciality extends Controller {
    public $db, $session, $model;

    function __construct() {
        helper('custom');
        $this->model = new Speciality_Model();
        $this->session = \Config\Services::session();
    }

    public function index() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data['specialities'] = $this->model->getSpecialities();
        echo view('Admin/header', $data);
        echo view('Admin/Speciality/index');
        echo view('Admin/footer');
    }

    public function add() {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        echo view('Admin/header');
        echo view('Admin/Speciality/form');
        echo view('Admin/footer');
    }

    public function edit($id) {
        if ( empty( $this->session->get( 'user_id' ) ) ) {
            return redirect()->to( '/admin/login' );
        }
        $data['speciality'] = $this->model->getSpecialityById($id);
        echo view('Admin/header', $data);
        echo view('Admin/Speciality/form');
        echo view('Admin/footer');
    }

    public function save() {
        $data = $this->request->getPost();

        if ( empty( $this->request->getPost('speciality_id') ) ) {
            // Add
            unset($data['speciality_id']);

            $data['create_date'] = date('Y-m-d H:i:s');
            $data['created_by'] = session()->get('user_id');

            $isInsert = $this->model->insertSpeciality($data);
            if ($isInsert) {
                $msg = array('type'=>'success','icon'=>'icon-ok green','txt'=>'Save Changes Updated Successfully');
                session()->setFlashdata('msg',$msg);
                return redirect()->to('/admin/speciality');
            } else {
                $msg = array('type'=>'error','icon'=>'icon-remove red','txt'=>'Sorry! Unable to Insert.');
                session()->setFlashdata('msg',$msg);
                return redirect()->to('/admin/speciality');
            }
        } else {
            // Edit
            $specialityId = $data['speciality_id'];
            unset($data['speciality_id']);

            $data['modified_date'] = date('Y-m-d H:i:s');
            $data['modified_by'] = session()->get('user_id');

            $isUpdated = $this->model->updateSpeciality($data, $specialityId);
            if ($isUpdated) {
                $msg = array('type'=>'success','icon'=>'icon-ok green','txt'=>'Save Changes Updated Successfully');
                session()->setFlashdata('msg',$msg);
                return redirect()->to('/admin/speciality');
            } else {
                $msg = array('type'=>'error','icon'=>'icon-remove red','txt'=>'Sorry! Unable to Update.');
                session()->setFlashdata('msg',$msg);
                return redirect()->to('/admin/speciality');
            }
        }
    }

    public function delete($id) {
        $query = $this->model->deleteSpeciality($id);
        if ($query) {
            $msg = array('type'=>'success','icon'=>'icon-ok green','txt'=>'Deleted Successfully');
            session()->setFlashdata('msg',$msg);
            return redirect()->to('/admin/speciality');
        } else {
            $msg = array('type'=>'error','icon'=>'icon-remove red','txt'=>'Sorry! Unable to Delete.');
            session()->setFlashdata('msg',$msg);
            return redirect()->to('/admin/speciality');
        }
    }
}
