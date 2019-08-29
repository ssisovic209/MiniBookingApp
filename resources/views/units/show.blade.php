@extends ('layout')

@section ('content')
<h2 class="name">{{ $unit->name}}</h1>
<div class= "content">Max capacity: {{$unit->max_persons}} persons</div>
<div class= "content">Price p/n: {{$unit->price_per_night}}€</div>

<p>
  <a href="/units/{{$unit->id}}/edit">Edit</a>
</p>

@if ($unit->reservations->count())
  <div
  <p style="font-weight:bold; margin-top:1em;">Current reservations:</p>
    @foreach ($unit->reservations as $res)
      <p><a href="/reservations/{{$res->id}}">{{ $res->last_name }}, {{ $res->first_name }}</a>: {{ $res->date_from }} - {{$res->date_to}}</p>
    @endforeach
  </div>
@endif

<h1 style="font-size:14pt; margin-top:1em;">Make a new reservation:</h1>

<form method="post" action="/reservations">

  {{ csrf_field() }}

  <div>
    <label class="label" for="name">Last name</label>
   <input type="text" name="last_name" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" placeholder="Last name" value="{{ old('last_name') }}" />
 </div>
 <div>
   <label class="label" for="first_name">First name</label>
   <input type="text" name="first_name" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" placeholder="First name" value="{{ old('first_name') }}"/>
 </div>
 <div>
   <label class="label" for="date_from">Entry date</label>
   <input type="date" name="date_from" class="input {{ $errors->has('date_from') ? 'is-danger' : '' }}" value="{{ old('date_from') }}"/>
 </div>
 <div
    <label class="label" for="date_to">Exit date</label>
   <input type="date" name="date_to" class="input {{ $errors->has('date_to') ? 'is-danger' : '' }}"  value="{{ old('date_to') }}"/>
 </div>
 <div>
   <label class="label" for="email">E-mail</label>
   <input type="email" name="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" placeholder="E-mail" value="{{ old('email') }}"/>
 </div>
 <input type="hidden" name="unit_id" value="{{$unit->id}}" />
 <div class="control" style="margin-top.1em">
   <button type="submit" class="button is-link">Add reservation</button>
 </div>

 @if ($errors->any())
 <div class="notification is-danger">
   <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error}}</li>
     @endforeach
   </ul>
 </div>
 @endif
</form>

@endsection
