<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class struktur extends Model
{
    use HasFactory;
    protected $table = 'struktur';
    protected $fillable = [
        'id_struktur',
        'nama',
        'jabatan',
        'gambar',
    ];
}
