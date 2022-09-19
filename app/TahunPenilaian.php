<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunPenilaian extends Model
{
    protected $table = "tahun_penilaian";
    protected $primaryKey = "id";
    protected $fillable = ['kode_tahun_penilaian', 'nama_tahun_penilaian', 'keterangan'];

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }

    public function Mutasi()
    {
        return $this->hasMany(Mutasi::class);
    }

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
