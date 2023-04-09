<?php

namespace App\Controllers;

class produksi extends BaseController
{
    public function index()
    {
        $data['title'] = 'My Profile';
        return view('produksi/index', $data);
    }
}
