<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beritas extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'id_kategori',
        'judul_berita',
        'tanggal_berita',
        'isi',
        'gambar',
    ];
}
