<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isuesfplm extends Model
{
    use HasFactory;
    protected $fillable = [
        'isu'
    ];

    public function fplm()
    {
        return $this->hasMany(Fplm::class, 'isu_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
