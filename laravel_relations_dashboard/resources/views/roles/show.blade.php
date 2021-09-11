@extends('template.main')



@section('content')
 <div class="container d-flex justify-content-center align-items-center my-5">

    <div class="card" style="width: 18rem;">

      <div class="card-body">
        <h4 class="card-title">ID:<span class="text-info"> {{$role->id}}</span></h4>
        <h5 class="card-title">Intitulé role:<span class="text-info">  {{$role->nom}}</span></h5>
        <a href="{{route('roles.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
</div>     
@endsection