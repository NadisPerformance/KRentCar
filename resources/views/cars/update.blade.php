@extends('layout')
@section('content')

<h1>list of cars</h1>
<ul>
    @forelse($cars as $car)
    <il>
            <h2><a href="{{route('cars.show', ['car' => $car->id])}}">  {{$car->firstname}{$car->lastname}}</a>
          <p>
    {{$car->picture}}
</p>
<p>
    {{$car->model}}
</p>
<p>
    {{$car->automatique}}
</p>

<p>
    {{$car->brands_id}}
</p>
<p>
    {{$car->agencies_id}}
</p>
<p>
    {{$car->categories_id}}
</p>
        <a href="{{route('cars.edit',['car'=>$car->id])}}">Edit</a>
    </il>
    @empty
<h1>vide</h1>
    @endforelse
</ul>
@endsection