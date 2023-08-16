<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokPemandu extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelompok_id',
        'pemandu_nama',
        'pemandu_hp',
    ];

    public function kelompok()
    {
        return $this->belongsTo('App\Models\Kelompok');
    }
}
