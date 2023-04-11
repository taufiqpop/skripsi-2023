<?php

namespace App\Controllers;

class Podcast extends BaseController
{
    public function podcast()
    {
        $data['title'] = 'Rapma FM | Podcast';

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('podcast/podcast', $data);
    }

    // Create Data Podcast
    public function addPodcast()
    {
        $data['title'] = 'Rapma FM | Add Podcast';

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('podcast/addPodcast', $data);
    }

    public function detailPodcast($id)
    {
        $podcastModel = new \App\Models\PodcastModel();
        $podcastMod = $podcastModel->find($id);

        $data = [
            'title' => 'Rapma FM | Details Podcast',
            'podcast' => $podcastMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('podcast');
        $builder->select('id, program, judul, deskripsi, link, images');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['podcast'] = $query->getResultArray();

        return view('podcast/detailPodcast', $data);
    }

    // Delete Data Podcast
    public function delete($id)
    {
        $podcastModel = new \App\Models\PodcastModel();

        $podcastModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect('podcast/podcast');
    }
}
