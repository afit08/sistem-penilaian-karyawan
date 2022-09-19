<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawan";
    protected $primaryKey = "id";
    protected $fillable = ['kode_karyawan', 'nip', 'nama_karyawan', 'alamat', 'tgl_lahir', 'jabatan', 'kepala_area', 'divisi_id', 'tahun_penilaian_id'];

    public function TahunPenilaian()
    {
        return $this->belongsTo(TahunPenilaian::class);
    }

    public function Divisi()
    {
        return $this->belongsTo(Divisi::class);
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


