<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_karyawan', 'nama_karyawan', 'alamat', 'tgl_lahir', 'no_tlp', 'jabatan', 'kepala_area', 'email', 'password', 'nip', 'divisi_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
