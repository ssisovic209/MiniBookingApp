<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Add new reservation</h1>

    <form method="post" action="/reservation">

      {{ csrf_field() }}

      <div>
       <input type="text" name="last_name" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" placeholder="Last name" value="{{ old('last_name') }}" />
     </div>
     <div>
       <input type="text" name="first_name" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" placeholder="First name" value="{{ old('first_name') }}"/>
     </div>
     <div>
       <input type="date" name="date_from" class="input {{ $errors->has('date_from') ? 'is-danger' : '' }}" value="{{ old('date_from') }}"/>
     </div>
     <div>
       <input type="date" name="date_to" class="input {{ $errors->has('date_to') ? 'is-danger' : '' }}"  value="{{ old('date_to') }}"/>
     </div>
     <div>
       <input type="number" name="total_price" class="input {{ $errors->has('total_price') ? 'is-danger' : '' }}" placeholder="Total price" value="{{ old('total_price') }}"/>
     </div>
     <div>
       <input type="number" name="unit_id" class="input {{ $errors->has('unit_id') ? 'is-danger' : '' }}" placeholder="Unit id" value="{{ old('unit_id') }}"/>
     </div>
     <div>
       <button type="submit" >Add reservation</button>
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
  </body> -->
</html>
