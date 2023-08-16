<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $fillable = [
        'pbak_id',
        'kelompok_nama',
        'ketua',
        'keterangan',
    ];

    public function pbak()
    {
        return $this->belongsTo('App\Models\Pbak');
    }
    public function peserta()
    {
        return $this->hasMany('App\Models\Peserta');
    }
}
