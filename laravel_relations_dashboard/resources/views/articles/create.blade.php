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


 <h1 class="text-center my-3"> Create Article</h1>

<form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
    @csrf


<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="date" value = "{{old('nom')}}" class="form-control" id="nom" name="nom">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" value = "{{old('description')}}"  class="form-control" id="description" name="description" >
</div>

<div class="mb-3">
    <label for="date_publication" class="form-label">date de publication</label>
    <input type="date" value = "{{old('date_publication')}}"  class="form-control" id="date_publication" name="date_publication" >
</div>






<div class="mb-3">
<select id="monselect" name="user_id">
    @foreach ($users as $user )    
    <option value="{{$user->id}}"  >{{$user->nom}} {{$user->prenom}}</option>
    @endforeach

</select>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection