@extends('template.main')




@section('content')
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

<form action="{{route('videos.store')}}" method="post" enctype="multipart/form-data">
    @csrf


<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="date" value = "{{old('title')}}" class="form-control" id="title" name="title">
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" value = "{{old('description')}}"  class="form-control" id="description" name="description" >
</div>

<div class="mb-3">
    <label for="duration" class="form-label">duration</label>
    <input type="text" value = "{{old('duration')}}"  class="form-control" id="duration" name="duration" >
</div>





<div class="mb-3">
    <label for="img" class="form-label">img</label>
    <input type="text"  class="form-control" id="img" name="img">
</div>


<div class="mb-3 ">
    <label class="form-label" for="url">Url</label>
    <input type="file"  class="form-control" id="url" name="url">
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>   
@endsection