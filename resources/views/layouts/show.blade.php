@extends('layout')
@section('content')



<p>
    {{ asset('images/'.$car->picture) }}
</p>

<p>
    model:   {{$car->model}}
</p>
<p>   automatique:
    @if ($car->automatique)
    oui
    @else
       non 

@endif
   
</p>


<p>
    brand: {{$car->brand->name}}
</p>
<p>
    agency:  {{$car->agency->name}}<br>
    agency address: {{$car->agency->address}}<br>
    agency city: {{$car->agency->city->name}}<br>
    agency admin: {{$car->agency->user->firstname}} {{$car->agency->user->lastname}}<br>
</p>
<p>
    category: {{$car->category->name}}
</p>


        <em>
             {{$car->created_at->diffForHumans()}}
        </em>
  
<p>status:
  {{$car->statut}}
     
    </p>
 


@endsection