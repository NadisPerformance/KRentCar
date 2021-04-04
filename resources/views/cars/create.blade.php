@extends('layout')
@section('content')
<form method="POST" action="{{route('cars.store')}}">
    <br>
    @csrf
@include('cars.form')
    <button type="submit">AddPost</button>
</form>
@endsection