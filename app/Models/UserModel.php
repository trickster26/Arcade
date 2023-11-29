<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];

    public function insertUser($data) {
        return $this->insert($data);
    }

    public function getUser($data) {
        return $this->where($data)->first();
    }

    public function login_user($params = []){
        if(empty($params)){
            return false;
        }
        $this->select('username');
        $this->where('username',$params['username']);
        $this->where('password',$params['password']);
        $result = $this->first();
        return $result;
    }

    public function register_user($params = []){
        if(empty($params)){
            return false;
        }
        return $this->table('users')->insert($params);
    }
}
