<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitsController extends Controller
{
    public function index()
    {

      $units = \App\Unit::all();

      return response()->json($units);

    }


    public function create()
    {
      $units = \App\Unit::all();
      //return view('/units/create');
      return response()->json($units);
    }


    public function show(\App\Unit $unit)
    {
      return response()->json($unit);
    }


    public function edit(\App\Unit $unit)
    {
      return response()->json($unit);
    }


    public function update(\App\Unit $unit)
    {
      $unit->update(request(['name','max_persons','price_per_night']));
      //return redirect ('/units');
    }


    public function destroy(\App\Unit $unit)
    {
      $unit->delete();
      //return redirect ('/units');
    }


    public function store()
    {
      //najprije validacija
      $validated = request()->validate([
        'name'=> ['required', 'min:3'],
        'max_persons' => ['required'],
        'price_per_night' => ['required'],
      ]);
      \App\Unit::create($validated);

      // $unit = new \App\Unit();
      //
      // $unit->name = request('name');
      // $unit->max_persons = request('max_persons');
      // $unit->price_per_night = request('price_per_night');
      //
      // $unit->save();

      //return redirect ('/units');
    }




}
