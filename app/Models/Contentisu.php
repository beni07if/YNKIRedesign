<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contentisu extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'issuesfplpm_id', 'judul',  'title', 'caption', 'captions', 'kategori', 'deskripsi', 'description', 'mapservice', 'foto', 'kontributor'
    ];

    public function issuesfplpm()
    {
        return $this->belongsTo(Issuesfplpm::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
