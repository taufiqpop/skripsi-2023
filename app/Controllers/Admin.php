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

    // Create Data Akun
    public function create()
    {
        $data['title'] = 'Rapma FM | Add Account';

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, password_hash');
        $query = $builder->get();

        $data['users'] = $query->getResultArray();

        return view('admin/create', $data);
    }

    // Save Data
    public function save()
    {
        $usersModel = new \App\Models\UsersModel();

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

        $usersModel->save([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'password_hash' => $this->request->getVar('password_hash'),
            // 'images' => $namaGambar,
            'user_images' => $this->request->getVar('user_images'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect('admin');
    }

    // Update Data
    public function update($id)
    {
        $usersModel = new \App\Models\UsersModel();

        // dd($this->request->getVar());
        $usersModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            // 'user_images' => $namaGambar,
            'user_images' => $this->request->getVar('user_images'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
        return redirect('admin');
    }
}
