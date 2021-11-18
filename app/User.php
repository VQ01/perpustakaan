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
        'name', 'email', 'password','firstname','lastname','address','city','country','postalcode','aboutme'
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

    /**
     * Get all of the peminjaman for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function peminjaman()
    {
        return $this->hasMany('App\peminjaman', 'user_id', 'id');
    }

    public function anggota()
    {
        return $this->hasMany('App\anggota', 'anggota_id', 'id');
    }
}
