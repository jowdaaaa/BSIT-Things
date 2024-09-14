<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function vinas(): string
    {
        return view('vinaslogin');
    }
}
