@extends('template.main')




@section('content')
<div class="container d-flex flex-column">

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
    
    
     <h1 class="text-center my-3"> Update User</h1>
    
    <form action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" value = "{{$user->nom}}" class="form-control" id="nom" name="nom">
    </div>
    
    <div class="mb-3">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" value = "{{$user->prenom}}"  class="form-control" id="prenom" name="prenom" >
    </div>
    
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="Number" value = "{{$user->age}}"  class="form-control" id="age" name="age" >
    </div>
    
    
    
    
    
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" value = "{{$user->description}}"  class="form-control" id="description" name="description">
    </div>
    
    <div class="mb-3">
        <label for="date_naissance" class="form-label">Date de naissance</label>
        <input type="date" value = "{{$user->date_naissance}}"  class="form-control" id="date_naissance" name="date_naissance">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email"  value = "{{$user->email}}"  class="form-control" id="email" name="email">
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" value = "{{$user->password}}" class="form-control" id="password" name="password">
    </div>
    
    
    <div class="mb-3 ">
        <label class="form-label" for="url">Photo</label>
        <input type="file"  value = "{{$user->photo}}" class="form-control" id="photo" name="photo">
    </div>
    
    <select id="monselect" name="user_id">
        
        @foreach ($roles as $role )   
        @if ($role->id === $user->role_id)
            
        <option value="{{$role->id}}"  selected >{{$role->nom}} </option>
        @else

        <option value="{{$role->id}}"  >{{$role->nom}} </option>
        @endif 
        @endforeach
    
    </select>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>   
</div>
@endsection