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


 <h1 class="text-center my-3"> Update Commentaire</h1>

<form action="{{route('commentaires.update',$commentaire->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="contenu" class="form-label">Contenu</label>
    <input type="text" value = "{{$commentaire->contenu}}" class="form-control" id="contenu" name="contenu">
</div>






<div class="mb-3">
<select id="monselect" name="article_id">

    @foreach ($articles as $article )
    @if ($commentaire->article_id == $article->id)
    
    <option value="{{$article->id}}" selected  >{{$article->nom}}</option>
    @else
        
    <option value="{{$article->id}}"  >{{$article->nom}}</option>
    @endif    
    
    @endforeach

</select>
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection