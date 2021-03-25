<?php

namespace App\Imports;

use App\Models\sc;
use Maatwebsite\Excel\Concerns\ToModel;

class karyawanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new sc([
            'namaKaryawan' => $row[0],
            'hadirMasuk' => $row[1],
            'izinMasuk' => $row[2],
            'bolosMasuk' => $row[3],
            'telatMasuk' => $row[4],
        ]);
    }
}
