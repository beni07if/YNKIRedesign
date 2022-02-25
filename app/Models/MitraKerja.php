<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraKerja extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_mitra',  'logo_mitra', '', 'waktu_mulai', 'waktu_selesai', 'email', 'bidang_teknis',
    ];
}
