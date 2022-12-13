<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Profile extends BaseController
{
    public function index($id = null, $slug = null)
    {
        if (!session('id')) {
            return redirect()->to('/');
        }
        $profile = new UserModel();
        $data['profile'] = $profile->getUser();
        return view('user/profile', $data);
    }

    public function update($id = null, $slug = null)
    {
        $profile  = new UserModel();
        $data = $this->request->getPost();
        $slug = url_title($this->request->getPost('first_name'), '-', true);
        $dataUpdate = array([
            'slug'          => $slug,
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'phone'         => $data['phone'],
            'tempat_lahir'  => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_klamin'  => $this->request->getVar('jenis_klamin'),
            'alamat'        => $data['alamat'],
        ]);
        // dd($dataUpdate);
        $profile->updateProfileUser($dataUpdate);
        return redirect()->to(site_url('profile'));
    }
}
