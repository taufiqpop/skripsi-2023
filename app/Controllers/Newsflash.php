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

    // Create Data Newsflash
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

    // Save Data
    public function save()
    {
        $newsModel = new \App\Models\NewsflashModel();

        // Ambil gambar
        // $fileGambar = $this->request->getFile('sampul');

        // Apakah tidak ada gambar yg diupload
        // if ($fileGambar->getError() == 4) {
        //     $namaGambar = 'default.svg';
        // } else {
        //     // pindahkan file ke folder img
        //     $fileGambar->move('img');

        //     // ambil nama file
        //     $namaGambar = $fileGambar->getName();
        // }

        $newsModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'link' => $this->request->getVar('link'),
            // 'images' => $namaGambar,
            'images' => $this->request->getVar('images'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect('newsflash/newsflash');
    }

    // Edit Data Newsflash
    public function editNewsflash($id)
    {
        $newsModel = new \App\Models\NewsflashModel();
        $newsMod = $newsModel->find($id);

        $data = [
            'title' => 'Rapma FM | Edit Data Newsflash',
            'newsflash' => $newsMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();

        return view('newsflash/editNewsflash', $data);
    }

    // Update Data
    public function update($id)
    {
        $newsModel = new \App\Models\NewsflashModel();

        // dd($this->request->getVar());
        $newsModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'link' => $this->request->getVar('link'),
            // 'images' => $namaGambar,
            'images' => $this->request->getVar('images'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
        return redirect('newsflash/newsflash');
    }
}
