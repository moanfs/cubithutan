<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Curhat extends BaseController
{
    public function index()
    {
        return view('user/curhat');
    }
}
