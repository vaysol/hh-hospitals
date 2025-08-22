<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Speciality_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function getSpecialities() {
        $builder = $this->db->table('speciality');
        $builder->select('*');
        $query = $builder->get()->getResultArray();
        return $query;
    }

    public function getSpecialityById($id) {
        $builder = $this->db->table('speciality');
        $builder->where('id', $id);
        return $builder->get()->getResultArray();
    }

    public function insertSpeciality($data) {
        $this->builder = $this->db->table('speciality');
        $query = $this->builder->insert($data);
        return $this->db->insertID();
    }

    public function updateSpeciality($data, $id) {
        $this->builder = $this->db->table('speciality');
        $this->builder->where('id', $id);
        $query = $this->builder->update($data);
        return $query;
    }

    public function deleteSpeciality($id) {
        $builder = $this->db->table('speciality');
        $builder->where('id', $id);
        $query = $builder->delete();
        return $query;
    }
}

// echo $this->db->getLastQuery();
// exit;
