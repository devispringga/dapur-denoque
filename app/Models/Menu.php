<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Nama tabel jika tidak mengikuti konvensi jamak ('menus')
    protected $table = 'menus';

    // Kolom-kolom yang bisa diisi massal
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'category'
    ];

    // Jika kamu tidak pakai timestamps (created_at, updated_at)
    public $timestamps = false;
}
