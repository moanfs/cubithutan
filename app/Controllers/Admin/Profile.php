<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $profile = new UserModel();
        $data['profile'] = $profile->getUser();
        return view('admin/profile', $data);
    }
}
