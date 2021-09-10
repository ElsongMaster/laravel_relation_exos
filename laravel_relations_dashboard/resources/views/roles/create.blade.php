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


 <h1 class="text-center my-3"> Create Role</h1>

<form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data">
    @csrf


<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="date" value = "{{old('nom')}}" class="form-control" id="nom" name="nom">
</div>



<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div> 
@endsection