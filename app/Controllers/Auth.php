<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session('id')) {
            return redirect()->back();
        }
        $data['validation'] = \config\Services::validation();
        return view('login', $data);
    }

    public function attemptLogin()
    {
        $data = $this->request->getPost();
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => ['required' => 'email tidak boleh kosong', 'valid_email'  => 'Silakan periksa bidang Email. Tampaknya tidak valid'],
            ],
            'pass_hash' => [
                'rules' => 'required',
                'errors' => ['required' => 'password tidak boleh kosong'],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('login')->withInput()->with('validation', $validation);
        }
        $query = $this->db->table('users')
            ->join('auth_group', 'auth_group.group_id = users.id_group')
            ->getwhere(['email' => $data['email']]);
        $attempt = $query->getrow();
        if ($attempt) {
            if ($attempt->active == 1) {
                if (password_verify($data['pass_hash'], $attempt->pass_hash)) {
                    $params = ['id' => $attempt->id];
                    $group = ['group' => $attempt->name];
                    $slug = ['slug' => $attempt->slug];
                    $this->session->set($params);
                    $this->session->set($group);
                    $this->session->set($slug);
                    if ($attempt->name == "Admin") {
                        return redirect()->to(site_url('admin'));
                    } else {
                        return redirect()->to(site_url('/'));
                    }
                } else {
                    return redirect()->back()->with('message', 'email atau password anda salah');
                }
            } else {
                return redirect()->back()->with('message', 'email belum aktif');
            }
        } else {
            return redirect()->back()->with('message', 'email atau password anda salah');
        }
    }


    public function register()
    {
        if (session('id')) {
            return redirect()->back();
        }
        $data['validation'] = \config\Services::validation();
        return view('register', $data);
    }

    public function attemptregister()
    {
        if (session('id')) {
            return redirect()->back();
        }
        $user = new UserModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'fullname' => [
                'rules' => 'required|',
                'errors' => ['required' => 'Nama lengkap tidak boleh kosong'],
            ],
            'callname' => [
                'rules' => 'required|',
                'errors' => ['required' => 'Nama panggilan tidak boleh kosong'],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => ['required' => 'email tidak boleh kosong', 'valid_email'  => 'Silakan periksa bidang Email. Tampaknya tidak valid', 'is_unique' => 'email sudah terdaftar'],
            ],
            'phone' => [
                'rules' => 'required|whatsapp_valid[phone]',
                'errors' => ['required' => 'no whatsapp tidak boleh kosong'],
            ],
            'pass_hash' => [
                'rules' => 'required|password_strength[6]',
                'errors' => ['required' => 'password tidak boleh kosong'],
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('register')->withInput()->with('validation', $validation);
        }
        $phone = $data['phone'];
        $phone = substr($phone, 1);
        $slug = url_title($this->request->getPost('fullname'), '-', true);
        $user->save([
            'slug'          => $slug,
            'fullname'      => $data['fullname'],
            'callname'      => $data['callname'],
            'phone'         => $phone,
            'email'         => $data['email'],
            'pass_hash'     => password_hash($data['pass_hash'], PASSWORD_DEFAULT),
            'id_group'      => '3',
            'active'        => '1'
        ]);
        return redirect()->to('login')->with('success', 'berhasil membuat akun');
    }

    public function lupaPassword()
    {
        return view('lupa_password');
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->back();
    }


    public function email($id, $slug)
    {
        $user = new UserModel();
        $data['email'] = $user->getUser();
        return view('ganti-email', $data);
    }


    public function Adminlogout()
    {
        session()->remove('id');
        return redirect()->to(site_url('/'));
    }
}
