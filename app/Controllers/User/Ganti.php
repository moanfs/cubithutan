<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Ganti extends BaseController
{
    public function email()
    {
        return view('user/ganti-email');
    }

    public function password()
    {
        return view('user/ganti-password');
    }
}
