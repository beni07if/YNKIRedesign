<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postinganmedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', 'judul',  'title', 'caption', 'captions', 'kategori', 'categories', 'foto', 'deskripsi', 'description'
    ];
}
