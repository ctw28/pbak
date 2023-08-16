<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProdi extends Model
{
    use HasFactory;

    protected $fillable = [
        'master_fakultas_id',
        'prodi_kode',
        'prodi_nama',
        'prodi_visi',
        'prodi_urutan',
        'prodi_misi',
        'prodi_keterangan',
        'is_aktif',
    ];

    public function fakultas()
    {
        return $this->belongsTo('App\Models\MasterFakultas');
    }
    public function mahasiswa()
    {
        return $this->hasMany('App\Models\Mahasiswa');
    }
}
