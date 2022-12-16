<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CurhatModel;

class Curhat extends BaseController
{
    public function index()
    {
        $curhat = new CurhatModel();
        return view('Admin/curhat');
    }

    public function save()
    {
    }
}
