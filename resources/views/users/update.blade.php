@extends('layout')
@section('content')

<h1>list of Users</h1>
<ul>
    @forelse($users as $user)
    <il>
            <h2><a href="{{route('users.show', ['user' => $user->id])}}">  {{$user->firstname}{$user->lastname}}</a>
          
            </h2>
            <p>
                 {{$user->address}}
            </p>
            <p>
                 {{$user->phone}}
            </p>
            <p>
                 {{$user->email}}
            </p>
            <em>
                 {{$user->created_at}}
            </em>
        <a href="{{route('users.edit',['user'=>$user->id])}}">Edit</a>
    </il>
    @empty
<h1>vide</h1>
    @endforelse
</ul>
@endsection