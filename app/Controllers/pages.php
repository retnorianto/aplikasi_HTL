<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | AplikasiHtl',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl.undata No. 123',
                    'kota' => 'Bandung'
                ],

                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Undata No. 192',
                    'kota' => 'Bandung'
                ]

            ]
        ];

        return view('pages/contact', $data);
    }
}
