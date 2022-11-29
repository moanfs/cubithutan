<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Konseling extends BaseController
{
    public function online()
    {
        return view('admin/konseling-online');
    }
    public function offline()
    {
        return view('admin/konseling-offline');
    }
}
