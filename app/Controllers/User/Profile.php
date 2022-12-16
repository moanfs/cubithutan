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
        return view('User/profile', $data);
    }

    public function update($id)
    {

        $profile  = new UserModel();
        $data = $this->request->getPost();
        $slug = url_title($this->request->getPost('first_name'), '-', true);
        $profile->save([
            'id'            => $id,
            'slug'          => $slug,
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'phone'         => $data['phone'],
            'tempat_lahir'  => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_klamin'  => $this->request->getVar('jenis_klamin'),
            'alamat'        => $data['alamat'],
        ]);
        return redirect()->back()->with('message', 'berhasil update profile');
    }

    public function email()
    {
        $user = new UserModel();
        $data = [
            'email' => $user->getUser(),
            'validation' => \config\Services::validation()
        ];
        return view('Userganti-email', $data);
    }

    public function gantiemail()
    {
        $user = new UserModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => ['required' => 'email tidak boleh kosong', 'valid_email'  => 'Silakan periksa bidang Email. Tampaknya tidak valid'],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('ganti-email')->withInput()->with('validation', $validation);
        }
        $user->save([
            'id'    => session('id'),
            'email'  => $data['email']
        ]);
        return redirect()->to(site_url('profile'))->with('message', 'email berhasil diganti');
    }
}
