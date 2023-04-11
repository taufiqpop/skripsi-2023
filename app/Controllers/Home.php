<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Login Page
    public function login()
    {
        $data['title'] = 'Rapma FM | Login';
        return view('auth/login', $data);
    }
}
