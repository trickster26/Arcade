<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller {

    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->form_validation = \Config\Services::validation();
    }

    public function index() {
        return view('registration_form');
    }

    public function register_user() {
        $this->form_validation->setRules([
            'username' => 'required|min_length[5]|max_length[12]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]'
        ]);

        if (!$this->form_validation->withRequest($this->request)->run()) {
            return view('registration_form');
        } else {
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ];

            if ($this->userModel->register_user($data)) {
                echo 'Registration successful!';
            } else {
                echo 'Registration failed.';
            }
        }
    }
}
