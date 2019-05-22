@extends('layout.cars-layout')

@section('content')

<div class="edit">
  <form action="{{route('cars.update', $car->id)}}" method="post">
   @csrf
   @method('PATCH')
   <div>
     <label for="brand">BRAND</label><br>
     <input type="text" name="brand" value="{{$car->brand}}">
   </div>
   <div>
     <label for="model">MODEL</label><br>
     <input type="text" name="model" value="{{$car->model}}">
   </div>
   <div>
     <label for="displacement">DISPLACEMENT</label><br>
     <input type="text" name="displacement" value="{{$car->displacement}}">
   </div>
   <div>
     <label for="max_speed">MAX SPEED</label><br>
     <input type="text" name="max_speed" value="{{$car->max_speed}}">
   </div>

   <button type="submit" name="button">EDIT CAR</button>
  </form>
</div>


@stop
