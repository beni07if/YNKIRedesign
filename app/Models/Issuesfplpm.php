<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuesfplpm extends Model
{
    use HasFactory;
    protected $fillable = [
        'isu'
    ];

    public function contentisu()
    {
        return $this->hasMany(Contentisu::class, 'issuesfplpm_id', 'id');
    }
}
