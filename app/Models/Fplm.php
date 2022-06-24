<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fplm extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'isuesfplm_id', 'judul',  'title', 'caption', 'captions', 'kategori', 'deskripsi', 'description', 'mapservice', 'foto', 'kontributor'
    ];

    public function isuesfplm()
    {
        // return $this->belongsTo(Isuesfplm::class, 'isu_id', 'id');
        return $this->belongsTo('App\Models\Isuesfplm', 'isuesfplm_id', 'id');
    }

    public function user()
    {
        // return $this->belongsTo('App\Models\User', 'user_id', 'id');
        return $this->belongsTo(Isuesfplm::class);
    }
}
