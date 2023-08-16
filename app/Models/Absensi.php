<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'peserta_id',
        'absen_sesi_id',
        'absen_by_self',
        'absen_oleh',
    ];

    public function peserta()
    {
        return $this->belongsTo('App\Models\Peserta');
    }
    public function absenSesi()
    {
        return $this->belongsTo('App\Models\AbsenSesi');
    }
}
