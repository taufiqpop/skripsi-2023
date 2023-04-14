<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // User List
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

    // Create Data
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

        $usersModel->save([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'password_hash' => $this->request->getVar('password_hash'),
            // 'images' => $namaGambar,
            'user_image' => $this->request->getVar('user_image'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect('admin');
    }

    // Edit Data
    public function edit($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $usMod = $usersModel->find($id);

        $data = [
            'title' => 'Rapma FM | Form Edit Data',
            'users' => $usMod,
            'validation' => \Config\Services::validation()
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

    // Update Data
    public function update($id)
    {
        $usersModel = new \App\Models\UsersModel();
        $usMod = $usersModel->find($id);

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getResultArray();

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
            return redirect()->to('admin/edit')->withInput()->with('validation', $validation);
        }

        $fileImgUser = $this->request->getFile('images');

        // Cek gambar, apakah tetap gambar lama
        if ($fileImgUser->getError() == 4) {
            $namaImgUser = $this->request->getVar('imgUserLama');
        } else {
            // Generate nama file random
            $namaImgUser = $fileImgUser->getRandomName();
            // Pindahkan gambar
            $fileImgUser->move('img', $namaImgUser);
            // Jangan Hapus File Default
            if ($usMod['user_image'] != 'default.svg') {
                unlink('img/' . $usMod['user_image']);
            }
        }

        $usersModel->save([
            'id' => $id,
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'user_image' => $namaImgUser,
            'name' => $this->request->getVar('name'),
        ]);
        // dd($this->request->getVar());    

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');
        return redirect('admin');
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

    // Change Password
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
}
