<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Konseling extends BaseController
{
    public function online()
    {
        return view('user/konseling-online');
    }
    public function offline()
    {
        return view('user/konseling-offline');
    }
}
