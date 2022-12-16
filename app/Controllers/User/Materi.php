<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\MateriModel;

class Materi extends BaseController
{
    public function index()
    {
        $materi = new MateriModel();
        $data['materi'] = $materi->getMateri();
        return view('User/materi', $data);
    }
}
