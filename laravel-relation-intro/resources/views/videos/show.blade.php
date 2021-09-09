@extends('template.main')




@section('content')

<div class="container d-flex justify-content-center align-items-center my-5">

    <div class="card" style="width: 18rem;">
    @if (Storage::disk('public')->exists('img/'.$video->img))
    
    <img src="{{asset('img/'.$video->img)}}" class="card-img-top" alt="...">
    @else
    
    <img src="{{$video->img}}" class="card-img-top" alt="...">
    {{-- <img src="{{$video->photo}}" class="card-img-top" alt="..."> --}}
    @endif
      <div class="card-body">
        <h4 class="card-title">ID: {{$video->id}}</h4>
        <h5 class="card-title">Title: {{$video->title}}</h5>
        <h5 class="card-title">Description: {{$video->description}}</h5>

        <h5 class="card-title">Durée: {{$video->duration}}</h5>
        <a href="{{route('videos.index')}}" class="btn btn-primary">Go back</a>
      </div>
    </div>
</div>
@endsection