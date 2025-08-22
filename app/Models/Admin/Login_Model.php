<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Login_Model extends Model {

    public $db, $session, $model;

    function __construct() {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function login($user_name, $password){
        $this->builder = $this->db->table('admin_users');
        $this->builder->select("*");
        $this->builder->where("user_name",$user_name);
        $this->builder->where("password",md5($password));
        $this->builder->where("status",1);
        $query = $this->builder->get()->getRow();
        return $query;
    }
}

// echo  $this->db->getLastQuery();
// exit;