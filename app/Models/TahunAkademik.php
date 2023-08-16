<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'semester',
        'sebutan',
        'kode',
    ];

    public function pbak()
    {
        return $this->hasOne('App\Models\Pbak');
    }
}
