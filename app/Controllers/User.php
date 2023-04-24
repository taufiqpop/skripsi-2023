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
        $pesanModel = new \App\Models\PesanModel();

        $data = [
            'title' => 'Rapma FM | Dashboard',
            'jmlUsers' => $usersModel->jumlahUsers(),
            'jmlNewsflash' => $newsflashModel->jumlahNewsflash(),
            'jmlPodcast' => $podcastModel->jumlahPodcast(),
            'jmlPesan' => $pesanModel->jumlahPesan(),
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

    // Pesan CampusBrainers
    public function pesan()
    {
        $pesanModel = new \App\Models\PesanModel();

        $currentPage = $this->request->getVar('page_pesan') ? $this->request->getVar('page_pesan') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $pesan = $pesanModel->search($keyword);
        } else {
            $pesan = $pesanModel;
        }

        $pesanModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Pesan CampusBrainers',
            'pesan'         => $pesan->paginate(5, 'pesan'),
            'pager'         => $pesanModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('user/pesan', $data);
    }
}
