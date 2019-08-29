@extends ('layout')

@section ('title', 'Vacation mode')

@section ('content')
  <h1 class="name">Our units </h1>

<ul>
  @foreach($units as $unit)
    <li><a href="/units/{{$unit->id}}">{{$unit->name}}</a></li>
    <li>Max capacity: {{$unit->max_persons}} persons</li>
    <li style="margin-bottom:1em;">Price p/n: {{$unit->price_per_night}}€</li>
  @endforeach
</ul>


@endsection
