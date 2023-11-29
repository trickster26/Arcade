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
}
