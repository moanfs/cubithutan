<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PodcastModel;

class Podcast extends BaseController
{
    public function index()
    {
        $podcast = new PodcastModel();
        $data['podcast'] = $podcast->getpodcast();
        return view('admin/podcast', $data);
    }

    public function save()
    {
        $podcast = new PodcastModel();
        $data = $this->request->getPost();
        // dd($data);
        $data_podcast = array(
            'name' => $data['name'],
            'link' => $data['link'],
            'desc' => $data['desc']
        );
        $podcast->setpodcast($data_podcast);
        return redirect()->to(site_url('admin/podcast'));
    }


    public function delete($id = null)
    {
        $podcast = new PodcastModel();
        $podcast->getDelete($id);
        return redirect()->to(site_url('admin/podcast'));
    }
}
