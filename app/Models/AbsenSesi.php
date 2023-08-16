<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenSesi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelompok_id',
        'rundown_id',
        'sesi_nama',
        'is_open',
        'is_selesai',
    ];

    public function kelompok()
    {
        return $this->belongsTo('App\Models\Kelompok');
    }
    public function rundown()
    {
        return $this->belongsTo('App\Models\Rundown');
    }
}
