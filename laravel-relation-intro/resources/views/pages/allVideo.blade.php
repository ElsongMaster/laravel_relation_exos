@extends('template.main')




@section('content')
{{-- {{data($datas)}} --}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<h1 class="text-center my-5">Bienvenue sur la page Video</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Url</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($datas as $data )
          
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td><img src="{{$data->url}}" height="100" width="100" alt=""></td>
        <td class="d-flex justify-content-evenly ">
            <a href="{{route('videos.show',$data->id)}}" class="btn btn-info me-2">SHOW</a>
            <a href="{{route('videos.edit',$data->id)}}" class="btn btn-warning me-2">EDIT</a>

            <form action="{{route('videos.destroy',$data->id)}}" method="post">
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

    <a href="{{route('videos.create')}}" class="btn btn-success p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-light fs-2"></i></a>
</div>
@endsection