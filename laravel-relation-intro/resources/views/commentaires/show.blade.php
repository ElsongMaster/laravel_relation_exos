@extends('template.main')




@section('content')

<div class="container d-flex justify-content-center align-items-center my-5">

    <div class="card" style="width: 18rem;">

      <div class="card-body">
        <h4 class="card-title">ID: {{$commentaire->id}}</h4>
        <h5 class="card-title">Nom: {{$commentaire->nom}}</h5>
        <h5 class="card-title">Prénom: {{$commentaire->prenom}}</h5>
        <h5 class="card-title">dateDePublication: {{$commentaire->dateDePublication}}</h5>
        <p class="card-text">Contenu: {{$commentaire->contenu}} </p>
        <p class="card-text">Video_id: {{$commentaire->video_id}} </p>
        <a href="{{route('commentaires.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
</div>
@endsection