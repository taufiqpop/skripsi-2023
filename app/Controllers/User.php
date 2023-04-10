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

    public function podcast()
    {
        $data['title'] = 'Rapma FM | Podcast';

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, link');
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();
        // dd($data);

        return view('user/podcast', $data);
    }
}
