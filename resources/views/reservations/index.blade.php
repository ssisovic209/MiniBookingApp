@extends ('layout')

@section ('title', 'Vacation mode')

@section ('content')
  <h1><strong>Here are all the current reservations</strong></h1>

<ul>
  @foreach($reservations as $res)
    <li style="margin-top:1em">Name: <a href="/reservations/{{$res->id}}">{{$res->last_name}}, {{$res->first_name}}</a></li>
    <li>Entry date: {{$res->date_from}}</li>
    <li>Exit date: {{$res->date_to}}</li>
    <li>Total price: {{$res->total_price}}€</li>
    <li>E-mail: {{$res->email}}</li>
    <li>Unit: {{$res->unit->name}}</li>
  @endforeach
</ul>


@endsection
