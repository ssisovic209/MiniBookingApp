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
      return view('/reservations/index', compact('reservations'));
    }


    public function create()
    {
      $reservations = \App\Reservation::all();
      return view('/reservations/create');
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

      $diff =strtotime($reservation->date_from)-strtotime($reservation->date_to);
      $reservation->total_price = $reservation->unit->price_per_night*abs(round($diff/86400));
      // 1 day = 24 hours ,  24 * 60 * 60 = 86400 seconds 

      $reservation->save();

      // $validated=request()->validate([
      //   'date_from'=> ['required'],
      //   'date_to' => ['required'],
      //   'first_name' => ['required'],
      //   'last_name' => ['required'],
      //   'email' => ['required'],
      //   'unit_id' => ['required'],
      //   'total_price' => ['required']
      // ]);
      //
      //
      // \App\Reservation::create($validated);
      // VRATIT SE NA OVAJ NAČIN KAD SE RIJEŠI total_price??



      return redirect ('/reservations');
    }


    public function show(\App\Reservation $reservation)
    {
      return view ('/reservations/show',compact('reservation'));
    }


    public function destroy(\App\Reservation $reservation)
    {
      $reservation->delete();
      return redirect ('/reservations');
    }
}
