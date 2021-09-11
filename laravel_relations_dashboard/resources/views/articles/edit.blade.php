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


 <h1 class="text-center my-3"> Update Article</h1>

<form action="{{route('articles.update',$article->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" value = "{{$article->nom}}" class="form-control" id="nom" name="nom">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" value = "{{$article->description}}"  class="form-control" id="description" name="description" >
</div>

<div class="mb-3">
    <label for="date_publication" class="form-label">date de publication</label>
    <input type="date" value = "{{$article->date_publication}}"  class="form-control" id="date_publication" name="date_publication" >
</div>






<div class="mb-3">
<select id="monselect" name="user_id">

    @foreach ($users as $user )    
    @if ($user->id === $article->id)
        
    <option value="{{$user->id}}" selected  >{{$user->nom}} {{$user->prenom}}</option>
    @else
        
    <option value="{{$user->id}}"  >{{$user->nom}} {{$user->prenom}}</option>
    @endif
    @endforeach

</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection