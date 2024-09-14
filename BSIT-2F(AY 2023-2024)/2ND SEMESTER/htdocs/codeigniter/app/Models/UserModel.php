<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'student_info'; // pangalan ng table

    public function getAllData(){
        return $this->findAll(); // return value from table
    }
}