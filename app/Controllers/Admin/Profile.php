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
        return view('Admin/profile', $data);
    }

    public function update($id)
    {

        $profile  = new UserModel();
        $data = $this->request->getPost();
        // dd($id);
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
        return view('Admin/ganti-email', $data);
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
            return redirect()->to('admin/ganti-email')->withInput()->with('validation', $validation);
        }
        $user->save([
            'id'    => session('id'),
            'email'  => $data['email']
        ]);
        return redirect()->to(site_url('admin/profile'))->with('message', 'email berhasil diganti');
    }

    public function password()
    {
        $user = new UserModel();
        $data['email'] = $user->getUser();
        // dd($data);
        return view('Admin/ganti-password', $data);
    }

    public function gantipassword()
    {
        $user = new UserModel();
        $data = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['id' => session('id')]);
        $pass = $query->getRow();
        if (!$this->validate([
            'pass_hash' => [
                'rules' => 'required|min_length[5]',
                'errors' => ['required' => 'password baru tidak boleh kosong', 'min_length' => 'Minimal Karakter 5'],
            ],
            'pass_verif' => [
                'rules' => 'required|min_length[5]',
                'errors' => ['required' => 'password baru tidak boleh kosong', 'min_length' => 'Minimal Karakter 5'],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('admin/ganti-password')->withInput()->with('validation', $validation);
        }
        $user->save([
            'id'    => session('id'),
            'pass_hash'  => password_hash($data['pass_hash'], PASSWORD_DEFAULT)
        ]);
        return redirect()->to(site_url('admin/profile'))->with('message', 'email berhasil diganti');
    }
}
