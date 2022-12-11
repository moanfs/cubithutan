<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Curhat extends BaseController
{
    public function index()
    {
        return view('admin/curhat');
    }
}
