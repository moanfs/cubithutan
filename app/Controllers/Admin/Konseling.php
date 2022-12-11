<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Konseling extends BaseController
{
    public function index()
    {
        return view('admin/konseling');
    }
}
