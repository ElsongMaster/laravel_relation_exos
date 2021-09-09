@extends('template.main')




@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif
<h1 class="text-center my-3"> Mise à jour données commentaire</h1>

<form action="{{route('commentaires.update',$commentaire->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" value="{{$commentaire->nom}}"  class="form-control" id="nom" name="nom" >
</div>

<div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" value="{{$commentaire->prenom}}"  class="form-control" id="prenom" name="prenom" >
</div>




<div class="mb-3">
    <label for="dateDePublication" class="form-label">Date de publication</label>
    <input type="date" value="{{$commentaire->dateDePublication}}" class="form-control" id="dateDePublication" name="dateDePublication">
</div>

<div class="mb-3">
    <label for="contenu" class="form-label">Contenu</label>
    <input type="text" value="{{$commentaire->contenu}}" class="form-control" id="contenu" name="contenu">
</div>

<div class="mb-3">
<select id="monselect" name="video_id">
    @foreach ($videos as $video )    
    <option value="{{$video->id}}"  >{{$video->title}}</option>
    @endforeach

</select>
</div>  
<button type="submit" class="btn btn-primary">Submit</button>

</form>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@endsection