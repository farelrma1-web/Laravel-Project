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
            'nim' => '123456789',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Muhammadiyah Pontianak'
        ];

        return view('profil', $data);
    }

    public function kontak()
    {
        $kontak = [
            'email' => 'farel@email.com',
            'no_hp' => '08123456789',
            'alamat' => 'Pontianak, Kalimantan Barat'
        ];

        return view('kontak', $kontak);
    }
}