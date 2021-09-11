@extends('template.main')



@section('content')
<div class="container d-flex justify-content-center align-items-center my-5">

    <div class="card" style="width: 18rem;">

      <div class="card-body">
        <h4 class="card-title">ID:<span class="text-info"> {{$article->id}}</span></h4>
        <h5 class="card-title">Nom:<span class="text-info">  {{$article->nom}}</span></h5>
        <h5 class="card-title">Description:<span class="text-info">  {{$article->description}}</span></h5>
        <h5 class="card-title">date de publication:<span class="text-info">  {{$article->date_publication}}</span></h5>

        <p class="card-text">user_id:<span class="text-info"> {{$article->user_id}}</span> </p>
        <a href="{{route('articles.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
</div>
@endsection