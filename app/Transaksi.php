<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $fillable = ['kategori_id', 'rating_id', 'mutasi_id', 'nilai1', 'nilai2', 'nilai3', 'nilai4'];

        public function Rating()
        {
            return $this->belongsTo(Rating::class);
        }

        public function Kategori()
        {
            return $this->belongsTo(Kategori::class);
        }

        public function User()
        {
            return $this->belongsTo(User::class);
        }

        public function Mutasi()
        {
            return $this->belongsTo(Mutasi::class);
        }
}
