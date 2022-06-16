<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fplm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'isu_id', 'judul',  'title', 'caption', 'captions', 'kategori', 'deskripsi', 'description', 'mapservice', 'foto', 'kontributor'
    ];

    public function isuesfplm()
    {
        return $this->belongsTo(Isuesfplm::class, 'isu_id', 'id');
    }
}
