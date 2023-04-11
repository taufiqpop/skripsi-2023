<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table            = 'podcast';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'program', 'deskripsi', 'link', 'images'];
    protected $useTimestamps    = true;

    public function getPodcast($link = false)
    {
        if ($link == false) {
            return $this->findAll();
        }

        return $this->where(['link' => $link])->first();
    }
}
