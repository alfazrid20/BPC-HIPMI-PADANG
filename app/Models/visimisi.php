<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    use HasFactory;
    protected $table = 'visimisi';
    protected $fillable = [
        'id_vimis',
        'visi',
        'misi',
    ];
}
