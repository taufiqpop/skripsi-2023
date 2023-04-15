<?php

namespace App\Controllers;

class User extends BaseController
{
    // Dashboard
    public function index()
    {
        $data['title'] = 'Rapma FM | Dashboard';
        return view('user/index', $data);
    }

    // My Profile
    public function profile()
    {
        $data['title'] = 'Rapma FM | My Profile';
        return view('user/profile', $data);
    }
}
