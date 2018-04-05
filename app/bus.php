<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    protected $fillable = ['merek','tahun','warna','plat'];
}
