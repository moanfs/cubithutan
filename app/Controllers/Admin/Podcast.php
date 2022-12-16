<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PodcastModel;

class Podcast extends BaseController
{
    public function index()
    {
        $podcast = new PodcastModel();
        $data = [
            'podcast'       => $podcast->getpodcast(),
            'episode'       => $podcast->getEpisode(),
            'validation'    => \config\Services::validation()
        ];
        return view('Admin/podcast', $data);
    }

    public function save()
    {
        $podcast = new PodcastModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'episode' => [
                'rules' => 'required',
                'errors' => ['required' => 'Episode Tidak Boleh Kosong'],
            ],
            'session' => [
                'rules' => 'required',
                'errors' => ['required' => 'Session Tidak Boleh Kosong'],
            ],
            'link' => [
                'rules' => 'required',
                'errors' => ['required' => 'Link Tidak Boleh Kosong'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data_podcast = array(
            'id_episode' => $data['episode'],
            'session' => $data['session'],
            'link' => $data['link'],
        );
        $podcast->setpodcast($data_podcast);
        return redirect()->to(site_url('admin/podcast'))->with('message', 'Berhasil menambahkan podcast');
    }

    public function setEpisode()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => ['required' => 'Nama episode tidak boleh kosong'],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $podcast = new PodcastModel();
        $data = $this->request->getPost();
        $slug = url_title($this->request->getPost('name'), '-', true);
        $data_episode = array(
            'slug' => $slug,
            'name' => $data['name'],
        );
        $podcast->setEpisode($data_episode);
        return redirect()->to(site_url('admin/podcast'))->with('message', 'Berhasil menambahkan episode');
    }
    public function setUpdate($id = null, $slug = null)
    {
        $podcast = new PodcastModel();
        $data = [
            'podcast'       => $podcast->getPodcastsatu($id),
            'episode'       => $podcast->getEpisode(),
            'validation'    => \config\Services::validation()
        ];
        return view('Admin/edit-podcast', $data);
    }
    public function update($id, $slug)
    {
        $podcast = new PodcastModel();
        $data = $this->request->getPost();
        dd($data);
        $dataUpdate = array(
            'id_episode' => $data['episode'],
            'session' => $data['session'],
            'link' => $data['link'],
        );
        $podcast->updatePodcast($dataUpdate, $id);
        return redirect()->to(site_url('admin/podcast/edit'))->with('udpate', 'Berhasil memperbaruhi podcast');
    }

    public function delete($id = null)
    {
        $podcast = new PodcastModel();
        $podcast->getDelete($id);
        return redirect()->to(site_url('admin/podcast'))->with('delete', 'Berhasil menghapus podcast');
    }
}
