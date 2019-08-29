<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function reservations()
    {
      return $this->hasMany(\App\Reservation::class);
    }
}
