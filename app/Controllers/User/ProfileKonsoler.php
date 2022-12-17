<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\UserModel;

class ProfileKonsoler extends BaseController
{
    public function index()
    {
        if (!session('id')) {
            return redirect()->to('/');
        }
        $konselor = new UserModel();
        $data['konselor'] = $konselor->getUser();
        return view('User/profile-konselor', $data);
    }

    public function update($id)
    {
        $konselor  = new UserModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required|',
                'errors' => ['required' => 'nama lengkap tidak boleh kosong'],
            ],
            'pendidikan' => [
                'rules' => 'required|',
                'errors' => ['required' => 'pendidikan tidak boleh kosong'],
            ],
            'kuliah' => [
                'rules' => 'required|',
                'errors' => ['required' => 'universitas tidak boleh kosong'],
            ],
            'desc_consoler' => [
                'rules' => 'required|',
                'errors' => ['required' => 'deskripsi singkat tidak boleh kosong'],
            ],
            'phone' => [
                'rules' => 'required|whatsapp_valid[phone]',
                'errors' => ['required' => 'no whatsapp tidak boleh kosong'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('profile/konselor');
        }
        $slug = url_title($this->request->getPost('fullname'), '-', true);
        $phone = $data['phone'];
        $phone = substr($phone, 1);
        $konselor->save([
            'id'                => $id,
            'slug'              => $slug,
            'fullname'          => $data['fullname'],
            'phone'             => $phone,
            'pendidikan'        => $data['pendidikan'],
            'desc_consoler'     => $data['desc_consoler'],
            'kuliah'            => $data['kuliah'],
            'active_consoler'   => '1'
        ]);
        return redirect()->back()->with('message', 'update profile');
    }
    public function gantifoto($id)
    {
        $foto = new UserModel();
        if (!$this->validate([
            'profile_consoler' => [
                'rules' => 'uploaded[profile_consoler]|ext_in[profile_consoler,png,jpg,jpeg]|max_size[profile_consoler,2048]',
                'errors' => ['uploaded' => 'Gambar Tidak Boleh Kosong', 'ext_in' => 'gambar harus png, jpg,jpeg', 'max_size' => 'Ukuran Maksumal 2 MB'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $data = $this->request->getFile('profile_consoler');
        $namafile = $data->getRandomName();
        $data->move('assets/consoler/', $namafile);
        // dd($namafile);
        $foto->save([
            'id'                    => $id,
            'profile_consoler'      => $namafile,
        ]);
        return redirect()->to('profile/konselor')->with('message', 'Berhasil update foto profile');
    }
}
