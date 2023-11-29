<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller {


    public function __construct() {
        $this->userModel = new UserModel();
        $this->form_validation = \Config\Services::validation();
    }
    
    public function index() {
        exit("hey");
        return view('login_form');
    }

    public function login_user() {
        $this->form_validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$this->form_validation->withRequest($this->request)->run()) {
            return view('login_form');
        } else {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $user = $this->userModel->login_user($username, $password);

            if ($user) {
                echo 'Login successful!';
            } else {
                echo 'Login failed.';
            }
        }
    }
}
?>
