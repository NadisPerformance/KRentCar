@extends('layout')
@section('content')
<form method="POST" action="{{route('users.store')}}">
    <br>
    @csrf
@include('users.form')
    <button type="submit">AddPost</button>
</form>
@endsection