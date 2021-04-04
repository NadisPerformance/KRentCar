@extends('layout')
@section('content')
<form method="POST" action="{{route('users.update',['user'=>$user->id])}}">
    <br>
    @csrf
    @method('PUT')
    @include('users.form')
    <button type="submit">AddPost</button>
</form>
@endsection