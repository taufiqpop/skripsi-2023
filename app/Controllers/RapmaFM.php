<?php

namespace App\Controllers;

class RapmaFM extends BaseController
{
    // My Profile
    public function index()
    {
        $data['title'] = 'Rapma FM';
        return view('rapmafm/index', $data);
    }
}
