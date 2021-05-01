<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table='tb_anggota';
    protected $primaryKey = 'nis';
    protected $keyType = 'string';

    protected $fillable=[
        'nis',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'jurusan'
    ];
}
