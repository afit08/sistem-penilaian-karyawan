<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";
    protected $primaryKey = "id";
    protected $fillable = ['nama'];

    public function user()
    {
        return $this->hasMany('App\User','id');
    }
}
