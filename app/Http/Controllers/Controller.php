<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use \App\Reservation;
use \App\Unit;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function getBlockedDates(){
    //   $reservations = \App\Reservation::all();
    //   foreach ($reservations as $res) {
    //     $unit_id = $res->unit_id
    //     $blockedDates
    //   }
    //
    // }
}
