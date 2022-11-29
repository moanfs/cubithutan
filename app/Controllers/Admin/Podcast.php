<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Podcast extends BaseController
{
    public function index()
    {
        return view('admin/podcast');
    }
}
