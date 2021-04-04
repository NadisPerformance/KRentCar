@extends('layout')
@section('content')



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
             {{$user->created_at->diffForHumans()}}
        </em>
  
<p>status:
    @if ($user->is_active)
        Enabled
        @else
           Disabled 

    @endif
    </p>
    <p>Admin:
        @if ($user->admin)
            oui
            @else
               non 
    
        @endif
        </p>


@endsection