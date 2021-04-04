@extends('layout')
@section('content')

<h1>list of cars</h1>
<ul>
    @forelse($cars as $car)
     <li><a href="{{route('cars.show', ['car'=> $car->id])}}" title= "{{$car->model}}">
        <img alt= "{{$car->brand->name}}" src= "{{ asset('images/'.$car->picture) }}" width="300" height="300" />
    </a>
   <br>
    
              <a href="{{route('cars.edit',['car'=>$car->id])}}">Edit</a>
         <form method="POST" action="{{route('cars.destroy',['car'=>$car->id])}}">
             <br>
             @csrf
             @method('DELETE')
                        <button type="submit">Delete</button>
         </form>
     </li>
     @empty
 <h1>vide</h1>
     @endforelse
 </ul>
@endsection