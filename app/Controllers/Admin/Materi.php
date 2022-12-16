<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MateriModel;

class Materi extends BaseController
{
    public function index()
    {
        $materi = new MateriModel();
        $data = [
            'materi'        => $materi->getMateri(),
            'validation'    => \config\Services::validation()
        ];
        return view('Admin/materi', $data);
    }

    public function save()
    {
        $materi = new MateriModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => ['required' => 'nama Tidak Boleh Kosong'],
            ],
            'img' => [
                'rules' => 'uploaded[img]|ext_in[img,png,jpg,jpeg]|max_size[img,10048]',
                'errors' => ['uploaded' => 'Gambar Tidak Boleh Kosong', 'ext_in' => 'gambar harus png, jpg,jpeg', 'max_size' => 'Ukuran Maksumal 10 MB'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $slug = url_title($this->request->getPost('name'), '-', true);
        $foto = $this->request->getFile('img');
        $namemateri = $foto->getRandomName();
        $foto->move('assets/materi/', $namemateri);
        $data_materi = array(
            'slug'  => $slug,
            'name' => $data['name'],
            'img' => $namemateri,
            'desc' => $data['desc'],
        );
        $materi->setMateri($data_materi);
        return redirect()->to(site_url('admin/materi'))->with('message', 'Berhasil menambahkan materi');
    }

    public function setUpdate($id = null, $slug = null)
    {
        $materi = new MateriModel();
        $data = [
            'materi'       => $materi->getMaterione($id),
            'validation'    => \config\Services::validation()
        ];
        // dd($data);
        return view('Admin/edit-materi', $data);
    }
}
