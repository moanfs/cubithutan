<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Ganti extends BaseController
{
    public function email()
    {
        return view('admin/ganti-email');
    }

    public function password()
    {
        return view('admin/ganti-password');
    }
}
