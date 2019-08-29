<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function unit()
    {
      return $this->belongsTo(\App\Unit::class);
    }
}
