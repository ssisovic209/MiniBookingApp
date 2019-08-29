@extends ('layout')

@section ('content')
  <h1 class="title">Edit unit</h1>

<form method="POST" action="/units/{{$unit->id}}" >

  @method('PATCH')
  @csrf

  <div class="field">
    <label class="label" for="title">Name</label>

    <div class="control">
      <input type="text" class="input" name="name" placeholder="Title" value=" {{ $unit->name }}">
    </div>
  </div>

  <div class="field">
    <label class="label" for="max_persons">Max persons</label>

    <div class="control">
      <input  type="text" class="input" name="max_persons" placeholder="Max persons" value=" {{ $unit->max_persons }}">
    </div>
  </div>

  <div class="field">
    <label class="label" for="price_per_night">Price per night</label>

    <div class="control">
      <input type="text" class="input" name="price_per_night" placeholder="Price p/n" value=" {{ $unit->price_per_night }}">
    </div>
  </div>

  <div class="field">

    <div class="control">
      <button type="submit" class="button is-link">Update Unit</button>
    </div>
  </div>

  </form>
<form method="POST" action="/units/{{$unit->id}}">

  @method('DELETE')
  @csrf

  <div class="field" style="margin-top:1em">

    <div class="control" >
      <button type="submit" class="button is-link">Delete Unit</button>
    </div>
  </div>
</form>





@endsection
