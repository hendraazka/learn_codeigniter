<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Halo extends Controller
{
    public function index()
    {
        $data['title'] = 'Halo dunia !';
        $data['msg'] = 'Welcome To Codeigniter 4';
        echo view('halo_view', $data);
    }
}
