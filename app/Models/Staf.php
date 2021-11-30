<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;
    protected $table = 'stafs';

    // protected $guard = 'mahasiswa';
    // protected $guard = 'anggota-mahasiswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $table = 'mahasiswas';
    protected $fillable = [
        'name',  'email', 'alamat', 'jenis_kelamin', 'jabatan', 'no_hp', 'foto', 'biodata', 'password',
    ];
}
