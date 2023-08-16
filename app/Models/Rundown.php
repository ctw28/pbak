<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rundown extends Model
{
    use HasFactory;

    protected $fillable = [
        'pbak_id',
        'kegiatan_nama',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'pemateri',
        'moderator',
        'pic',
        'keterangan',
    ];

    public function pbak()
    {
        return $this->belongsTo('App\Models\Pbak');
    }
    public function absenSesi()
    {
        return $this->hasMany('App\Models\AbsenSesi');
    }
}
