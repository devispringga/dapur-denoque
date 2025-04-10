<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id)
    {
        $menus = [
            1 => [
                'nama' => 'Rice Bowl Ayam Rendang',
                'gambar' => 'assets/images/ayam_rendang.jpg',
                'deskripsi' => 'Ayam Rendang dimasak dengan bumbu khas Indonesia.',
                'harga' => 'Rp 15.000'
            ],
            2 => [
                'nama' => 'Rice Bowl Ayam Katsu',
                'gambar' => 'assets/images/ayam_katsu.jpg',
                'deskripsi' => 'Ayam Katsu goreng crispy dengan sayuran segar.',
                'harga' => 'Rp 12.500'
            ],
            3 => [
                'nama' => 'Rice Bowl Ayam Sewir',
                'gambar' => 'assets/images/ayam_sewir.jpg',
                'deskripsi' => 'Ayam Sewir berbumbu rempah pilihan.',
                'harga' => 'Rp 10.000'
            ],
        ];

        $menu = $menus[$id] ?? null;

        if (!$menu) {
            abort(404);
        }

        return view('detail', compact('menu'));
    }
}
