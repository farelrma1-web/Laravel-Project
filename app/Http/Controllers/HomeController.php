<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        $data = [
            'nama' => 'Muhammad Farel Ramadhan',
            'nim' => '241230037',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Muhammadiyah Pontianak'
        ];

        return view('profil', $data);
    }

    public function kontak()
    {
        $kontak = [
            'email' => 'farelrma1@email.com',
            'no_hp' => '082131301992',
            'alamat' => 'Pontianak, Kalimantan Barat'
        ];

        return view('kontak', $kontak);
    }
}