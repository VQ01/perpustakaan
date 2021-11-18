<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjamandetail extends Model
{
    protected $table='peminjamandetail';
    protected $fillable=['peminjaman_id','buku_id','tglkembali/buku','denda'];
    

    /**
     * Get the peminjaman that owns the peminjamandetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peminjaman()
    {
        return $this->belongsTo('App\peminjaman', 'peminjaman_id', 'id');

        
    }

    public function buku()
    {
        return $this->belongsTo('App\buku', 'buku_id', 'id');

        
    }

}
