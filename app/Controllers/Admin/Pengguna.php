<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $pengguna = new UserModel();
        $data['pengguna'] = $pengguna->getAllPengguna();
        return view('admin/pengguna', $data);
    }
}
