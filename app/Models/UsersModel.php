<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields  = [
        'email', 'username', 'fullname', 'user_image', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];
    protected $useTimestamps    = true;

    public function search($keyword)
    {
        return $this->table('users')->like('username', $keyword)->orLike('fullname', $keyword);
    }
}
