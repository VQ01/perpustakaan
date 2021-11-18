<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table='peminjaman';
    protected $fillable=['tglpinjam','user_id','admin_id','tglhrskembali','statuspinjam'];
    protected $dates=['tglpinjam','tglhrskembali'];
    //protected $dateFormat='d F Y';


    //relasi dg tabel user
    
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    //relasi dg tabel peminjaman detai
    
    public function peminjamandetail()
    {
        return $this->hasMany('App\peminjamandetail', 'peminjaman_id', 'id');
    }
}
