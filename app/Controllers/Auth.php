<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
            ->join('auth_user_group', 'auth_user_group.user_id = users.id')
            ->join('auth_group', 'auth_group.group_id = auth_user_group.user_id')
            ->getwhere(['email' => $data['email']]);
        $attempt = $query->getrow();
        // dd($attempt);
        if ($attempt) {
            if ($attempt->active == 1) {
                if (password_verify($data['pass_hash'], $attempt->pass_hash)) {
                    $params = ['id' => $attempt->id];
                    $group = ['group' => $attempt->name];
                    // dd($group);
                    $this->session->set($params);
                    $this->session->set($group);
                    if ($attempt->name == "Admin") {
                        return redirect()->to(site_url('admin'));
                    } else {
                        return redirect()->to(site_url('/'));
                    }
                } else {
                    return redirect()->back()->with('message', 'email atau password anda salah');
                }
            } else {
                return redirect()->back()->with('error', 'email belum aktif');
            }
        } else {
            return redirect()->back()->with('message', 'email atau password anda salah');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->back();
    }


    public function register()
    {
        return view('register');
    }

    public function lupaPassword()
    {
        return view('lupa_password');
    }

    public function Adminlogout()
    {
        session()->remove('id');
        return redirect()->to(site_url('/'));
    }
}
