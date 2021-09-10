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


 <h1 class="text-center my-3"> Create Commentaire</h1>

<form action="{{route('commentaires.store')}}" method="post" enctype="multipart/form-data">
    @csrf


<div class="mb-3">
    <label for="contenu" class="form-label">Contenu</label>
    <input type="text" value = "{{old('contenu')}}" class="form-control" id="contenu" name="contenu">
</div>






<div class="mb-3">
<select id="monselect" name="article_id">
    @foreach ($articles as $article )    
    <option value="{{$article->id}}"  >{{$article->nom}}</option>
    @endforeach

</select>
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection