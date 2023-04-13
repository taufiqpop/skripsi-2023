<?php

namespace App\Controllers;

class User extends BaseController
{
    // My Profile
    public function index()
    {
        $data['title'] = 'Rapma FM | My Profile';
        return view('user/index', $data);
    }
}
