<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $produk = [
            'ayam_rendang' => [
                'nama' => 'Rice Bowl Ayam Rendang',
                'gambar' => 'ayam_rendang.jpg',
                'deskripsi' => 'Ayam Rendang dimasak dengan bumbu khas Indonesia, disajikan dengan nasi hangat.',
                'harga' => 'Rp 15.000'
            ],
            'ayam_katsu' => [
                'nama' => 'Rice Bowl Ayam Katsu',
                'gambar' => 'ayam_katsu.jpg',
                'deskripsi' => 'Ayam Katsu goreng crispy dengan nasi dan sayuran segar.',
                'harga' => 'Rp 12.500'
            ],
            'ayam_sewir' => [
                'nama' => 'Rice Bowl Ayam Sewir',
                'gambar' => 'ayam_sewir.jpg',
                'deskripsi' => 'Ayam Sewir dengan rempah pilihan, sehat dan bergizi.',
                'harga' => 'Rp 10.000'
            ]
        ];

        return view('menu', compact('produk'));
    }

    public function detail($product)
    {
        $produk = [
            'ayam_rendang' => [
                'nama' => 'Rice Bowl Ayam Rendang',
                'gambar' => 'ayam_rendang.jpg',
                'deskripsi' => 'Ayam Rendang dimasak dengan bumbu khas Indonesia, disajikan dengan nasi hangat.',
                'harga' => 'Rp 15.000'
            ],
            'ayam_katsu' => [
                'nama' => 'Rice Bowl Ayam Katsu',
                'gambar' => 'ayam_katsu.jpg',
                'deskripsi' => 'Ayam Katsu goreng crispy dengan nasi dan sayuran segar.',
                'harga' => 'Rp 12.500'
            ],
            'ayam_sewir' => [
                'nama' => 'Rice Bowl Ayam Sewir',
                'gambar' => 'ayam_sewir.jpg',
                'deskripsi' => 'Ayam Sewir dengan rempah pilihan, sehat dan bergizi.',
                'harga' => 'Rp 10.000'
            ]
        ];

        $data = $produk[$product] ?? null;

        return view('detail', compact('data'));
    }
}
