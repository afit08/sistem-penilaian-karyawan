<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = "divisi";
    protected $primaryKey = "id";
    protected $fillable = ['kode_divisi', 'divisi'];

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
