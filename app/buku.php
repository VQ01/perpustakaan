<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table='buku';
    protected $fillable =['kodebuku','judul','pengarang','penerbit','tahun','cover','status'];

    /**
     * Get all of the peminjamandetail for the buku
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peminjamandetail()
    {
        return $this->hasMany('App\peminjamandetail', 'buku_id', 'id');
    }


}
