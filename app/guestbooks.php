<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guestbooks extends Model
{
    protected $fillable =['email','nama','pesan'];
}
