@extends('template.main')



@section('content')
<div class="container d-flex justify-content-center align-items-center my-5">

    <div class="card" style="width: 18rem;">

      <div class="card-body">
    @if (Storage::disk('public')->exists('img/'.$user->photo))
    
    <img src="{{asset('img/'.$user->photo)}}" class="card-img-top" alt="...">
    @else
    
    <img src="{{$user->photo}}" class="card-img-top" alt="...">

    @endif
        <h4 class="card-title">ID:<span class="text-info"> {{$user->id}}</span></h4>
        <h5 class="card-title">Nom:<span class="text-info">  {{$user->nom}}</span></h5>
        <h5 class="card-title">Prenom:<span class="text-info">  {{$user->prenom}}</span></h5>
        <h5 class="card-title">Description:<span class="text-info">  {{$user->description}}</span></h5>
        <h5 class="card-title">Date de naissance:<span class="text-info">  {{$user->date_naissance}}</span></h5>
        <h5 class="card-title">Email:<span class="text-info">  {{$user->email}}</span></h5>

        <p class="card-text">Role_id:<span class="text-info"> {{$user->role_id}}</span> </p>
        <a href="{{route('users.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
</div>  
@endsection