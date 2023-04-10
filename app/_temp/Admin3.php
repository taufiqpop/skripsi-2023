<?php

namespace App\Controllers;

use \App\Models\UsersModel;

class Admin extends BaseController
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {

        $data['title'] = 'User List';

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResultArray();

        return view('admin/index', $data);
    }

    // Details
    public function detail($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $usMod = $usersModel->findAll();
        // dd($usMod);

        $data = [
            'title' => 'User Detail',
            'users' => $usMod,
        ];

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getResultArray();

        return view('admin/detail', $data);
    }

    // Delete
    public function delete($id)
    {
        $users = $this->usersModel->find($id);

        if ($users['user_image'] != 'default.svg') {
            unlink('img/' . $users['user_image']);
        }

        $this->usersModel->delete($id);
        return redirect('admin/index');
    }
}
