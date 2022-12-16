<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Consoler extends BaseController
{
    public function index()
    {
        $consoler = new UserModel();
        $data['consoler'] = $consoler->getAllKonsolerUser();
        return view('User/consoler', $data);
    }
}
