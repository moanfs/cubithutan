<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Podcast extends BaseController
{
    public function index()
    {
        return view('user/podcast');
    }
}

?>