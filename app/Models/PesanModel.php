<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table            = 'pesan';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['name', 'subject', 'message', 'created_at'];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('pesan')->like('name', $keyword)->orLike('subject', $keyword);
    }

    public function jumlahPesan()
    {
        return $this->table('pesan')->get()->getNumRows();
    }
}
