<?php

namespace App\Exports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\FromCollection;

class AnggotaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Anggota::all();
    }
}
