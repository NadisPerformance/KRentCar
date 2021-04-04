@extends('layout')
@section('content')

<h1>list of cars</h1>
<table>
   
    @forelse($cars as $car)
     <a href="{{route('cars.show', ['car'=> $car->id])}}" title= "{{$car->statut}}">
        <img alt= "{{$car->brand->name}}" src= "{{ asset('images/'.$car->picture) }}" width="400" height="400" />
        <h1>brand: {{$car->brand->name}}</h1>
        <h2>model: {{$car->model}}</h1>
         <h3>price: {{$car->price}}</h1>
    </a>


           

     @empty
 <h1>vide</h1>
     @endforelse
    </table>
@endsection