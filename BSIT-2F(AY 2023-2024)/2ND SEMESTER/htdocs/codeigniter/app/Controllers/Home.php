<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    protected $UserModel;

    public function __construct(){
        helper (['form', 'uri']); //Load helpers
        $this->UserModel = new UserModel();
    }

    public function index(){
        $data["users"] = $this->UserModel->getAllData();
        return view('welcome_message', $data);
        //print_r($data);

        var_dump($data);
        
    }

    public function dashboard(){
        //return view ('dashboard');
        $data["users"] = $this->UserModel->getAllData();
    }
}


