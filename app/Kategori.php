<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategoris";
    protected $primaryKey = "id";
    protected $fillable = ['kode_kategori', 'nama_kategori', 'bobot'];

    public function Kompetensi()
    {
        return $this->hasMany(Kompetensi::class);
    }

    public function kompetensis(){
    	return $this->hasMany('App\Kompetensi');
    }

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function Mutasi()
    {
        return $this->hasMany(Mutasi::class);
    }
}
