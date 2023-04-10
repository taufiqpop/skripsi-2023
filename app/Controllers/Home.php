<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Login Page
    public function index()
    {
        $data['title'] = 'Rapma FM | Login';
        return view('auth/login', $data);
    }
}
