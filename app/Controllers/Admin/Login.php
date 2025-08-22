<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\Login_Model;

class Login extends BaseController 
{
    protected $db;
    protected $model;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        helper('url');
        helper('form');
        if (empty($this->session->get('user_id'))) {
            return view('Admin/Login/index');
        } else {
            return redirect()->to('/admin/home');
        }
    }

    public function check_login() 
    {
        helper('url');
        helper('form');
        $user_name = $this->request->getPost('user_name');
        $password = $this->request->getPost('password');

        if ($this->request->getMethod() == 'post') {
            session()->setFlashdata('LoginError', '');

            $model = new Login_Model();
            $isLogin = $model->login($user_name, $password);

            if (!empty($isLogin)) {
                $sessionData = [
                    'user_id' => $isLogin->id,
                    'role'  => $isLogin->role,
                    'user_name' => $isLogin->user_name,
                    'first_name' => $isLogin->first_name,
                    'last_name' => $isLogin->last_name,
                    'email' => $isLogin->email,
                    'status' => $isLogin->status,
                ];
                $this->session->set($sessionData);
                session()->setFlashdata('LoginError', '');
                return redirect()->to('/admin/home');
            } else {
                session()->setFlashdata('LoginError', 'Invalid Username or Password.');
            }
        }
        return redirect()->to('/admin/login');
    }
}