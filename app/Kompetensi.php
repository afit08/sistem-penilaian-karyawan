<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $table = "kompetensis";
    protected $primaryKey = "id";
    protected $fillable = ['kode_kompetensi', 'nama_kompetensi', 'kategori_id'];

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function kategoris(){
    	return $this->belongsTo('App\Kategori');
    }

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
