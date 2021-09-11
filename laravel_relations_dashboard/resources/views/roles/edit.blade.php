@extends('template.main')




@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Role</h1>

<form action="{{route('roles.update',$role->id)}}" method="post" class="d-flex flex-column align-items-center w-50 mt-5" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="nom" class="form-label mx-2">Intitulé role:</label>

    <select id="monselect" name="nom">
        @foreach ($roles as $role_bis)
        @if ($role->id == $role_bis->id )
        
        <option value="{{$role_bis->nom}}" selected >{{$role_bis->nom}}</option>   
        @else
        <option value="{{$role_bis->nom}}" >{{$role_bis->nom}}</option>   
            
        @endif
        @endforeach

    </select>
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection