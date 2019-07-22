<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class humas extends Model
{
    protected $fillable = ['nama_tamu','jk','alamat','status','jaminan','keterangan'];
}
