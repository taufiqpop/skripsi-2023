<?php

namespace App\Controllers;

class Newsflash extends BaseController
{
    // List Newsflash
    public function newsflash()
    {
        $newsflashModel = new \App\Models\NewsflashModel();

        $currentPage = $this->request->getVar('page_newsflash') ? $this->request->getVar('page_newsflash') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $newsflash = $newsflashModel->search($keyword);
        } else {
            $newsflash = $newsflashModel;
        }

        $newsflashModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Newsflash',
            'newsflash'     => $newsflash->paginate(5, 'newsflash'),
            'pager'         => $newsflashModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('newsflash/newsflash', $data);
    }

    // Detail Newsflash
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

    // Create Data
    public function addNewsflash()
    {
        $data = [
            'title' => 'Rapma FM | Add Newsflash',
            'validation' => \Config\Services::validation()
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('newsflash');
        $builder->select('id, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['newsflash'] = $query->getResultArray();

        return view('newsflash/addNewsflash', $data);
    }

    // Save Data
    public function save()
    {
        $newsModel = new \App\Models\NewsflashModel();

        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'uploaded[images]|max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('newsflash/addNewsflash')->withInput()->with('validation', $validation);
        }

        // Ambil gambar
        $gambarNewsflash = $this->request->getFile('images');
        // dd($gambarNewsflash);

        // Apakah tidak ada gambar yg diupload
        if ($gambarNewsflash->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // pindahkan file ke folder img
            $gambarNewsflash->move('img');

            // ambil nama file
            $namaGambar = $gambarNewsflash->getName();
        }

        $newsModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'link' => $this->request->getVar('link'),
            'images' => $namaGambar,
            // 'images' => $this->request->getVar('images'),
        ]);

        session()->setFlashdata('pesan', 'Data Newsflash Berhasil Ditambahkan!');
        return redirect('newsflash/newsflash');
    }

    // Edit Data
    public function editNewsflash($id)
    {
        $newsModel = new \App\Models\NewsflashModel();
        $newsMod = $newsModel->find($id);

        $data = [
            'title' => 'Rapma FM | Edit Data Newsflash',
            'newsflash' => $newsMod,
            'validation' => \Config\Services::validation()
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

        // Validasi Input
        if (!$this->validate([
            'images' => [
                'rules' => 'max_size[images,10240]|is_image[images]|mime_in[images,image/jpg,image/jpeg,image/png,image/svg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('newsflash/editNewsflash')->withInput()->with('validation', $validation);
        }

        $fileImgNewsflash = $this->request->getFile('images');

        // Cek gambar, apakah tetap gambar lama
        if ($fileImgNewsflash->getError() == 4) {
            $namaImgNewsflash = $this->request->getVar('imgNewsLama');
        } else {
            // Generate nama file random
            $namaImgNewsflash = $fileImgNewsflash->getRandomName();
            // Pindahkan gambar
            $fileImgNewsflash->move('img', $namaImgNewsflash);
            // Hapus File yg Lama
            unlink('img/' . $this->request->getVar('imgNewsLama'));
        }

        // dd($this->request->getVar());
        $newsModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'link' => $this->request->getVar('link'),
            'images' => $namaImgNewsflash,
        ]);

        session()->setFlashdata('pesan', 'Data Newsflash Berhasil Diubah!');
        return redirect('newsflash/newsflash');
    }

    // Delete Data
    public function delete($id)
    {
        $newsModel = new \App\Models\NewsflashModel();

        // Cari gambar berdasarkan id
        $newsMod = $newsModel->find($id);

        // Cek jika file gambar default.svg
        if ($newsMod['images'] != 'default.svg') {
            // Hapus Gambar Permanen
            unlink('img/' . $newsMod['images']);
        }


        $newsModel->delete($id);
        session()->setFlashdata('pesan', 'Data Newsflash Berhasil Dihapus!');
        return redirect('newsflash/newsflash');
    }
}
