@extends('layout')
@section('content')
<form method="POST" action="{{route('cars.update',['car'=>$car->id])}}">
    <br>
    @csrf
    @method('PUT')
    @include('cars.form')
    <button type="submit">AddPost</button>
</form>
@endsection