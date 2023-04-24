<?php

namespace App\Controllers;

class Podcast extends BaseController
{
    // List Podcast
    public function podcast()
    {
        $podcastModel = new \App\Models\PodcastModel();

        $currentPage = $this->request->getVar('page_podcast') ? $this->request->getVar('page_podcast') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $podcast = $podcastModel->search($keyword);
        } else {
            $podcast = $podcastModel;
        }

        $podcastModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Podcast',
            'podcast'       => $podcast->paginate(5, 'podcast'),
            'pager'         => $podcastModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('podcast/podcast', $data);
    }

    // Detail Podcast
    public function detailPodcast($id)
    {
        $podcastModel = new \App\Models\PodcastModel();
        $podcastMod = $podcastModel->find($id);

        $data = [
            'title'     => 'Rapma FM | Details Podcast',
            'podcast'   => $podcastMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('podcast/detailPodcast', $data);
    }

    // Create Data
    public function addPodcast()
    {
        $data = [
            'title' => 'Rapma FM | Add Podcast',
            'validation' => \Config\Services::validation()
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('podcast/addPodcast', $data);
    }

    // Save Data
    public function save()
    {
        $podcastModel = new \App\Models\PodcastModel();

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
            return redirect()->to('podcast/addPodcast')->withInput()->with('validation', $validation);
        }

        // Ambil gambar
        $gambarPodcast = $this->request->getFile('images');
        // dd($gambarPodcast);

        // Apakah tidak ada gambar yg diupload
        if ($gambarPodcast->getError() == 4) {
            $namaGambar = 'default.svg';
        } else {
            // pindahkan file ke folder img
            $gambarPodcast->move('img');

            // ambil nama file
            $namaGambar = $gambarPodcast->getName();
        }

        $podcastModel->save([
            'judul' => $this->request->getVar('judul'),
            'program' => $this->request->getVar('program'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'link' => $this->request->getVar('link'),
            'images' => $namaGambar,
        ]);

        session()->setFlashdata('pesan', 'Data Podcast Berhasil Ditambahkan!');
        return redirect('podcast/podcast');
    }

    // Edit Data
    public function editPodcast($id)
    {
        $podcastModel = new \App\Models\PodcastModel();
        $podcastMod = $podcastModel->find($id);

        $data = [
            'title' => 'Rapma FM | Edit Data Podcast',
            'podcast' => $podcastMod,
            'validation' => \Config\Services::validation()
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('podcast/editPodcast', $data);
    }

    // Update Data
    public function update($id)
    {
        $podcastModel = new \App\Models\PodcastModel();

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
            return redirect()->to('podcast/editPodcast')->withInput()->with('validation', $validation);
        }

        $fileImgPodcast = $this->request->getFile('images');

        // Cek gambar, apakah tetap gambar lama
        if ($fileImgPodcast->getError() == 4) {
            $namaImgPodcast = $this->request->getVar('imgPodcastLama');
        } else {
            // Generate nama file random
            $namaImgPodcast = $fileImgPodcast->getRandomName();
            // Pindahkan gambar
            $fileImgPodcast->move('img', $namaImgPodcast);
            // Hapus File yg Lama
            unlink('img/' . $this->request->getVar('imgPodcastLama'));
        }

        // dd($this->request->getVar());
        $podcastModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'program' => $this->request->getVar('program'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'link' => $this->request->getVar('link'),
            'images' => $namaImgPodcast,
        ]);

        session()->setFlashdata('pesan', 'Data Podcast Berhasil Diubah!');
        return redirect('podcast/podcast');
    }

    // Delete Data
    public function delete($id)
    {
        $podcastModel = new \App\Models\PodcastModel();

        // Cari gambar berdasarkan id
        $podcastMod = $podcastModel->find($id);

        // Cek jika file gambar default.svg
        if ($podcastMod['images'] != 'default.svg') {
            // Hapus Gambar Permanen
            unlink('img/' . $podcastMod['images']);
        }

        $podcastModel->delete($id);
        session()->setFlashdata('pesan', 'Data Podcast Berhasil Dihapus!');
        return redirect('podcast/podcast');
    }
}
