<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fplm extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', 'judul',  'title', 'caption', 'captions', 'kategori', 'deskripsi', 'description', 'mapservice', 'foto', 'kontributor'
    ];
}
