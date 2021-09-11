@extends('template.main')



@section('content')
<div class="container d-flex justify-content-center align-items-center my-5">

    <div class="card" style="width: 18rem;">

      <div class="card-body">
        <h4 class="card-title">ID:<span class="text-info"> {{$commentaire->id}}</span></h4>
        <h5 class="card-title">Contenu:<span class="text-info">  {{$commentaire->contenu}}</span></h5>


        <p class="card-text">Article_id:<span class="text-info"> {{$commentaire->article_id}}</span> </p>
        <a href="{{route('commentaires.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
</div>  
@endsection