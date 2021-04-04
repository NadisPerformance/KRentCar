@extends('layout')
@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Statut</th>
        <th scope="col">User</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
       
      <tr >
        <td  scope="row">@if ($user->is_active)
            Enabled
            @else
               Disabled 
    
        @endif</td  >
        <td><a href="{{route('users.show', ['user'=> $user->id])}}">  {{$user->firstname}}{{$user->lastname}}</a>
        </td>
        <td >  <a href="{{route('users.edit',['user'=>$user->id])}}">Edit</a></td>
        <td><form method="POST" action="{{route('users.destroy',['user'=>$user->id])}}">
         
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>                    
        </form></td>
      </tr>
     
      @empty
      <h1>vide</h1>
          @endforelse
      </ul>
     @endsection
    </tbody>
  </table>
