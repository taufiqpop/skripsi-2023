<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table            = 'podcast';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'program', 'deskripsi', 'link', 'images', 'created_at', 'updated_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('podcast')->like('judul', $keyword)->orLike('program', $keyword);
    }

    public function jumlahPodcast()
    {
        return $this->table('podcast')->get()->getNumRows();
    }
}
