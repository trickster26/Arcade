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
        return view('login_form');
    }

    public function login_user() {
        $validation = \Config\Services::validation();

        // Example form validation rules
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/login')->withInput()->with('errors', $validation->getErrors());
        } else {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $password = password_hash($password, PASSWORD_DEFAULT);
            $params = ['username' => $username, 'password' => $password];
            $user = $this->userModel->login_user($params);

            if ($user) {
                echo 'Login successful!';
            } else {
                echo 'Login failed.';
            }
        }
    }
}
?>
