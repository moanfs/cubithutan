<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Konseling extends BaseController
{
    public function online()
    {
        return view('User/konseling-online');
    }
    public function offline()
    {
        return view('User/konseling-offline');
    }
}
