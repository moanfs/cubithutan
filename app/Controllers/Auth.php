<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function attemptLogin()
    {
        $data = $this->request->getPost();
        if (!$this->validate([
            'email' => [
                'required',
            ],
            'pass_hash' => [
                'required',
            ],
        ])) {
            $validation = \config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        $query = $this->db->table('users')
            ->join('auth_user_group', 'auth_user_group.user_id = users.id')
            ->join('auth_group', 'auth_group.group_id = auth_user_group.user_id')
            ->getwhere(['email' => $data['email']]);
        $attempt = $query->getrow();
        // dd($attempt);
        if ($attempt) {
            if ($attempt->active == 0) {
                if (password_verify($data['pass_hash'], $attempt->pass_hash)) {
                    $params = ['id' => $attempt->id];
                    $group = ['group' => $attempt->name];
                    $this->session->set($params);
                    $this->session->set($group);
                    if ($attempt->name == "Admin") {
                        return redirect()->to(site_url('admin'));
                    } else {
                        return redirect()->back()->with('success', 'Berhasil masuk');
                    }
                } else {
                    return redirect()->back()->with('message', 'email atau password salah');
                }
            } else {
                return redirect()->back()->with('error', 'email belum aktif');
            }
        } else {
            return redirect()->back()->with('message', 'email atau password salah');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->back();
    }
}
