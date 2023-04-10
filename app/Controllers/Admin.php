<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = 'Rapma FM | User List';

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResultArray();

        return view('admin/index', $data);
    }

    // Details Data
    public function detail($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $usMod = $usersModel->findAll();
        // dd($usMod);

        $data = [
            'title' => 'Rapma FM | User Detail',
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

    // Delete Data
    public function delete($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $hapus = $usersModel->find($id);

        if ($hapus['user_image'] != 'default.svg') {
            unlink('img/' . $hapus['user_image']);
        }

        $usersModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect('admin/index');
    }

    // Edit Data
    public function edit($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $usMod = $usersModel->find($id);
        // dd($usMod);

        $data = [
            'title' => 'Rapma FM | Form Edit Data',
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

        return view('admin/edit', $data);
    }

    // Edit Password
    public function ubahPassword($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $usMod = $usersModel->find($id);
        // dd($usMod);

        $data = [
            'title' => 'Rapma FM | Form Change Password',
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

        return view('admin/ubahPassword', $data);
    }

    public function update($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $update = $usersModel->find($id);
    }
}
