<?php

namespace App\Controllers;

class jurnalistik extends BaseController
{
    public function index()
    {
        $data['title'] = 'My Profile';
        return view('jurnalistik/index', $data);
    }
}
