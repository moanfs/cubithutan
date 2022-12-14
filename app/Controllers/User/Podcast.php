<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\PodcastModel;

class Podcast extends BaseController
{
    public function index()
    {
        $podcast = new PodcastModel();
        $data['podcast'] = $podcast->getpodcast();
        return view('user/podcast', $data);
    }
}
