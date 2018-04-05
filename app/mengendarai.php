<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mengendarai extends Model
{
    protected $fillable = ['bus_id','supir_id','tempat','tujuan','harga','waktu'];
}
