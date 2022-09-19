<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $table = "mutasi";
    protected $primaryKey = "id";
    protected $fillable = ['tahun_penilaian_id', 'user_id', 'status'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function TahunPenilaian()
    {
        return $this->belongsTo(TahunPenilaian::class);
    }

    public function Rating()
    {
        return $this->belongsTo(Rating::class);
    }

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
