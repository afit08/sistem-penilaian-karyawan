<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class KaryawanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'nama_karyawan' => $row[1],
            'alamat' => $row[2],  
            'tgl_lahir' => Date::excelToDateTimeObject($row[3]), 
            'no_tlp' => $row[4], 
            'jabatan' => $row[5], 
            'kepala_area' => $row[6], 
            'email' => $row[7],
            'password' => Hash::make($row[8]),
            'nip' => $row[9],
            'divisi_id' => $row[10]
        ]);
    }
}
