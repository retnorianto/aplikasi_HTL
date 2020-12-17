<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'ini controller index method index';
    }

    //--------------------------------------------------------------------
    public function about($nama = '', $umur = 0)
    {
        echo "Hallo, $nama, saya berumur $umur tahun.";
    }
}
