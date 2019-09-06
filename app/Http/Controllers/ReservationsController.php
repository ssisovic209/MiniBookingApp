<?php

namespace App\Http\Controllers;

use \App\Reservation;
use \App\Units;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
public function index()
    {
      $reservations = \App\Reservation::all();
      return response()->json($reservations);
    }


    public function create()
    {
      $reservations = \App\Reservation::all();

      return response()->json($reservations);
    }


    public function store()
    {

      $reservation = new \App\Reservation();

      $reservation->unit_id = request('unit_id');
      $reservation->last_name = request('last_name');
      $reservation->first_name = request('first_name');
      $reservation->date_from = request('date_from');
      $reservation->date_to = request('date_to');
      $reservation->email = request('email');

      //calculate total price
      $diff =strtotime($reservation->date_from)-strtotime($reservation->date_to);
      $reservation->total_price = $reservation->unit->price_per_night*abs(round($diff/86400));

      //check if already taken
      $blockedDates = $this->getBlockedDates();

      $taken=false;

      $tmp = $reservation->date_from;
      while(strtotime($tmp) < strtotime($reservation->date_to))
      {
        if (in_array($tmp, $blockedDates))
        {
            $taken=true;
            break;
        } 
        $tmp= date("Y-m-d",strtotime("+1 day",strtotime($tmp)));
      }

      if($taken)
      {
         return "Dates are not available";
      }
      else
      {
          $reservation->save();
      }


    }


    public function show(\App\Reservation $reservation)
    {

      return response()->json($reservation);
    }


    public function destroy(\App\Reservation $reservation)
    {
      $reservation->delete();

      return response()->json($reservation);
    }

    public function getBlockedDates()
    {
      $reservations = \App\Reservation::all();

      $array = array(); 

        foreach ($reservations as $res) {
            
          $tmp = $res->date_from;
          while(strtotime($tmp) < strtotime($res->date_to))
          {
            $array[] = date('Y-m-d', strtotime($tmp));
            $tmp= date("Y-m-d",strtotime("+1 day",strtotime($tmp)));
          }
        }
      
        return response()->json($array);
        return $array;
    }

}