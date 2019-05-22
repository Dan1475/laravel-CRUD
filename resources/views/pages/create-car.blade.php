@extends('layout.cars-layout')

@section('content')


<div class="edit">
  <form action="{{route('cars.store')}}" method="post">
    @csrf
    <div>
      <label for="brand">BRAND</label><br>
      <input type="text" name="brand" value="">
    </div>
    <div>
      <label for="model">MODEL</label><br>
      <input type="text" name="model" value="">
    </div>
    <div>
      <label for="displacement">DISPLACEMENT</label><br>
      <input type="text" name="displacement" value="">
    </div>
    <div>
      <label for="max_speed">MAX SPEED</label><br>
      <input type="text" name="max_speed" value="">
    </div>

    <button type="submit" name="button">SAVE NEW CAR</button>
  </form>
</div>


@stop
