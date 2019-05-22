@extends('layout.cars-layout')

@section('content')


<div class="show">
  <h1>Car Show</h1>
  <table border="1">

    @foreach($cars as $car)
    <tr>
      <td>{{ $car -> id}}</td>
      <td>{{ $car -> brand}}</td>
      <td>{{ $car -> model}}</td>
      <td>{{ $car -> displacement}}</td>
      <td>{{ $car -> max_speed}}</td>
      <td> <a href="{{route('cars.edit', $car->id)}}"><i class="fas fa-edit"></i> </a></td>
      <td>
       <form action="{{route('cars.destroy', $car->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="button"><i class="fas fa-trash-alt"></i></button>
       </form>


      </td>

    </tr>

    @endforeach
  </table>
  <a href="{{route('cars.create')}}">CREATE NEW CAR</a>
</div>

@stop
