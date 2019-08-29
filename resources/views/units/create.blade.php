<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Add new unit</h1>

    <form method="post" action="/units">

      {{ csrf_field() }}

      <div>
       <input type="text" name="name" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" placeholder="Unit name" value="{{ old('name') }}" />
     </div>
     <div>
       <input type="text" name="max_persons" class="input {{ $errors->has('max_persons') ? 'is-danger' : '' }}" placeholder="Max persons" value="{{ old('max_persons') }}"/>
     </div>
     <div>
       <input type="text" name="price_per_night" class="input {{ $errors->has('price_per_night') ? 'is-danger' : '' }}" placeholder="Price p/n" value="{{ old('price_per_night') }}"/>
     </div>
     <div>
       <button type="submit" >Add unit</button>
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
  </body>
</html>
