@extends ('layout')

@section ('content')
<div class="content" style="font-style:italic">Reservation no. {{$reservation->id}}</div>
<h1 class="content">{{ $reservation->last_name}}, {{$reservation->first_name}}</h1>
<div class= "content"></div>
<div class= "content">Entry date: {{$reservation->date_from}}</div>
<div class= "content">Exit date: {{$reservation->date_to}}</div>
<div class= "content">Unit: {{$reservation->unit->name}}</div>
<div class= "content">Total price: {{$reservation->total_price}}</div>
<div class= "content">E-mail: {{$reservation->email}}</div>
<div>

<form method="POST" action="/reservations/{{$reservation->id}}">
  @method('DELETE')
  @csrf

  <div class="field">

    <div class="control">
      <button type="submit" class="button is-link">Delete Reservation</button>
    </div>
  </div>
</form>
</div>


@endsection
