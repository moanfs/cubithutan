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
        return view('Admin/konselor', $data);
    }

    public function edit($id, $slug)
    {
        $pengguna = new UserModel();
        $data = [
            'konselor'  => $pengguna->getPengguna($id),
        ];
        return view('Admin/edit-konselor', $data);
    }

    public function update($id)
    {
        $pengguna = new UserModel();
        $pengguna->save([
            'id'    => $id,
            'id_group'  => 3
        ]);
        return redirect()->to('admin/konselor')->with('message', 'menghapus konselor');
    }
}
