<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = "rating";
    protected $primaryKey = "id";
    protected $fillable = ['kode_rating', 'nilai_rating', 'keterangan'];

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function Rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function Mutasi()
    {
        return $this->hasMany(Mutasi::class);
    }
}
