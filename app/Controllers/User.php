<?php

namespace App\Controllers;

class User extends BaseController
{
    // Dashboard
    public function index()
    {
        $usersModel = new \App\Models\UsersModel();
        $newsflashModel = new \App\Models\NewsflashModel();
        $podcastModel = new \App\Models\PodcastModel();

        $data = [
            'title' => 'Rapma FM | Dashboard',
            'jmlUsers' => $usersModel->jumlahUsers(),
            'jmlNewsflash' => $newsflashModel->jumlahNewsflash(),
            'jmlPodcast' => $podcastModel->jumlahPodcast(),
        ];
        return view('user/index', $data);
    }

    // My Profile
    public function profile()
    {
        $data = [
            'title' => 'Rapma FM | My Profile',
        ];
        return view('user/profile', $data);
    }
}
