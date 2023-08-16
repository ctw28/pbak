<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbak extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun_akademik_id',
        'pbak_nama',
        'pbak_keterangan',
    ];

    public function tahunAkademik()
    {
        return $this->belongsTo('App\Models\TahunAkademik');
    }
    public function kelompok()
    {
        return $this->hasMany('App\Models\Kelompok');
    }
}
