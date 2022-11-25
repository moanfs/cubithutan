<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Materi extends BaseController
{
    public function index()
    {
        return view('user/materi');
    }
}
