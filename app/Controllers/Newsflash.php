<?php

namespace App\Controllers;

class Newsflash extends BaseController
{
    public function newsflash()
    {
        $data['title'] = 'Rapma FM | Newsflash';

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();
        // dd($data);

        return view('newsflash/newsflash', $data);
    }

    public function addNewsflash()
    {
        $data['title'] = 'Rapma FM | Add Newsflash';

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();

        return view('newsflash/addNewsflash', $data);
    }

    // Create Data Newsflash
    public function detailNewsflash($id)
    {
        $newsModel = new \App\Models\NewsflashModel();
        $newsMod = $newsModel->find($id);

        $data = [
            'title' => 'Rapma FM | Details Newsflash',
            'newsflash' => $newsMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();

        return view('newsflash/detailNewsflash', $data);
    }

    // Delete Data Newsflash
    public function delete($id)
    {
        $newsModel = new \App\Models\NewsflashModel();

        $newsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect('newsflash/newsflash');
    }
}
