<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'kelompok_id',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa');
    }
    public function kelompok()
    {
        return $this->belongsTo('App\Models\Kelompok');
    }
}
