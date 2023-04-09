<?php

namespace App\Controllers;

class user extends BaseController
{
    public function index()
    {
        $data['title'] = 'My Profile';
        return view('user/index', $data);
    }
}
