<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'Rapma FM | My Profile';
        return view('user/index', $data);
    }

    public function newsflash()
    {
        $data['title'] = 'Rapma FM | NewsFlash';

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();
        // dd($data);

        return view('user/newsflash', $data);
    }

    public function addNewsflash()
    {
        $data['title'] = 'Rapma FM | Add NewsFlash';

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();
        // dd($data);

        return view('user/addNewsflash', $data);
    }

    public function detailNewsflash($id)
    {
        $newsModel = new \App\Models\NewsflashModel();
        $newsMod = $newsModel->find($id);
        // dd($usMod);

        $data = [
            'title' => 'Rapma FM | Details NewsFlash',
            'newsflash' => $newsMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();
        // dd($data);

        return view('user/detailNewsflash', $data);
    }

    public function podcast()
    {
        $data['title'] = 'Rapma FM | Podcast';

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();
        // dd($data);

        return view('user/podcast', $data);
    }

    public function addPodcast()
    {
        $data['title'] = 'Rapma FM | Add Podcast';

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();
        // dd($data);

        return view('user/addPodcast', $data);
    }

    public function detailPodcast($id)
    {
        $podcastModel = new \App\Models\PodcastModel();
        $podcastMod = $podcastModel->find($id);
        // dd($usMod);

        $data = [
            'title' => 'Rapma FM | Details Podcast',
            'newsflash' => $podcastMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();
        // dd($data);

        return view('user/detailPodcast', $data);
    }

    // Delete Data
    public function delete($id)
    {
        $newsModel = new \App\Models\NewsflashModel();

        $newsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect('user/newsflash');
    }

    // Create Data Newsflash
    public function createNewsflash()
    {
        $data = [
            'title' => 'Form Tambah Data Newsflash',
            'validation' => \Config\Services::validation()
        ];

        return view('user/newsflash', $data);
    }
}
