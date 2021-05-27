<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // protected $table = 'anggota';
    protected $table = 'anggota';
    protected $fillable = [
        'user_id',
        'nisn',
        'name',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'jurusan'];

        /**
        * Method One To One
        */
        public function user()
        {
            return $this->belongsTo(User::class);
        }

        /**
        * Method One To Many
        */
        public function transaksi()
        {
            return $this->hasMany(Transaksi::class);
        }

}
