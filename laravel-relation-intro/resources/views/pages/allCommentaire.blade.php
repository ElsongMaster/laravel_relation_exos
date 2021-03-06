@extends('template.main')




@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<h1 class="text-center my-5">Bienvenue sur la page Commentaire</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Video_id</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $data )
          
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->nom}}</td>
        <td>{{$data->prenom}}</td>
        <td>{{$data->dateDePublication}}</td>
        <td>{{$data->video_id}}</td>
        <td class="d-flex justify-content-evenly ">
            <a href="{{route('commentaires.show',$data->id)}}" class="btn btn-info me-2">SHOW</a>
            <a href="{{route('commentaires.edit',$data->id)}}" class="btn btn-warning me-2">EDIT</a>

            <form action="{{route('commentaires.destroy',$data->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
        </td>

      </tr>
      @endforeach
    </tbody>
</table>
<div class="container d-flex justify-content-center">

    <a href="{{route('commentaires.create')}}" class="btn btn-success p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-light fs-2"></i></a>
</div>

@endsection