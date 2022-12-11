<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Konselor extends BaseController
{
    public function index()
    {
        $konselor = new UserModel();
        $data['konselor'] = $konselor->getAllKonsoler();
        return view('admin/konselor', $data);
    }
}
