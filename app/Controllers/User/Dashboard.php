<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PodcastModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $podcast = new PodcastModel();
        $data['podcast'] = $podcast->getIndexPodcast();
        return view('User/index', $data);
    }
}
