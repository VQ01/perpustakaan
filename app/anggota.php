<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table='anggota';


    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
