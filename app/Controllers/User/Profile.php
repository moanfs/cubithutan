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
        $data = [
            'profile' => $profile->getUser(),
            'validation' => \config\Services::validation()
        ];
        return view('User/profile', $data);
    }

    public function update($id)
    {
        $profile  = new UserModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required|',
                'errors' => ['required' => 'nama lengkap tidak boleh kosong'],
            ],
            'callname' => [
                'rules' => 'required|',
                'errors' => ['required' => 'nama panggilan tidak boleh kosong'],
            ],
            'phone' => [
                'rules' => 'required|whatsapp_valid[phone]',
                'errors' => ['required' => 'no whatsapp tidak boleh kosong'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('profile');
        }
        $phone = $data['phone'];
        $phone = substr($phone, 1);
        $slug = url_title($this->request->getPost('fullname'), '-', true);
        $profile->save([
            'id'            => $id,
            'slug'          => $slug,
            'fullname'      => $data['fullname'],
            'callname'      => $data['callname'],
            'pendidikan'    => $data['pendidikan'],
            'agama'         => $data['agama'],
            'anakke'        => $data['anakke'],
            'phone'         => $phone,
            'tempat_lahir'  => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_klamin'  => $this->request->getVar('jenis_klamin'),
            'alamat'        => $data['alamat'],
        ]);
        return redirect()->back()->with('message', 'update profile');
    }

    public function email()
    {
        $user = new UserModel();
        $data = [
            'email' => $user->getUser(),
            'validation' => \config\Services::validation()
        ];
        return view('User/ganti-email', $data);
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

    public function password()
    {
        $user = new UserModel();
        $data = [
            'validation' => \config\Services::validation()
        ];
        $user = new UserModel();
        return view('User/ganti-password', $data);
    }

    public function gantipassword($id)
    {
        $user = new UserModel();
        $data = $this->request->getPost();
        $query = $this->db->table('users')->getwhere(['id' => $id]);
        $attempt = $query->getrow();
        if (!$this->validate([
            'pass_old' => [
                'rules' => 'required',
                'errors' => ['required' => 'Password lama tidak boleh kosong'],
            ],
            'pass_hash' => [
                'rules' => 'required',
                'errors' => ['required' => 'Password tidak boleh kosong', 'valid_email'  => 'Silakan periksa bidang Email. Tampaknya tidak valid'],
            ],
            'pass_very' => [
                'rules' => 'required',
                'errors' => ['required' => 'Password ulang tidak boleh kosong', 'valid_email'  => 'Silakan periksa bidang Email. Tampaknya tidak valid'],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('ganti-password')->withInput()->with('validation', $validation);
        }
        if (!password_verify($data['pass_old'], $attempt->pass_hash)) {
            return redirect()->back()->with('message', 'password lama anda salah');
        } else {
            $pass_very = password_hash($data['pass_very'], PASSWORD_DEFAULT);
            if (!password_verify($data['pass_hash'], $pass_very)) {
                return redirect()->back()->with('message', 'password ulang anda tidak sama');
            } else {
                if (password_verify($data['pass_hash'],  $attempt->pass_hash)) {
                    return redirect()->to(site_url('ganti-password'))->with('message', 'password tidak boleh sama yang lama');
                } else {
                    $user->save([
                        'id'    => $id,
                        'pass_hash' => $pass_very
                    ]);
                }
                return redirect()->to(site_url('profile'))->with('message', 'password berhasil diganti');
            }
        }
    }

    public function gantifoto($id)
    {
        $foto = new UserModel();
        if (!$this->validate([
            'img_profile' => [
                'rules' => 'uploaded[img_profile]|ext_in[img_profile,png,jpg,jpeg]|max_size[img_profile,2048]',
                'errors' => ['uploaded' => 'Gambar Tidak Boleh Kosong', 'ext_in' => 'gambar harus png, jpg,jpeg', 'max_size' => 'Ukuran Maksumal 2 MB'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $data = $this->request->getFile('img_profile');
        $namafile = $data->getRandomName();
        $data->move('assets/profile/', $namafile);
        $foto->save([
            'id'            => $id,
            'img_profile'   => $namafile,
        ]);
        return redirect()->to('profile')->with('message', 'update foto profile');
    }
}
