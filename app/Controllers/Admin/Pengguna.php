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
        return view('Admin/pengguna', $data);
    }

    public function edit($id, $slug)
    {
        $pengguna = new UserModel();
        $data = [
            'pengguna'  => $pengguna->getPengguna($id),
        ];
        return view('Admin/edit-pengguna', $data);
    }

    public function update($id)
    {
        $pengguna = new UserModel();
        $pengguna->save([
            'id'    => $id,
            'id_group'  => 2
        ]);
        return redirect()->to('admin/pengguna')->with('message', 'menambahkan konselor');
    }
}
