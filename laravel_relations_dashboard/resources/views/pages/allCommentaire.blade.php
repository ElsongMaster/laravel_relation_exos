@extends('template.main')



@section('content')

    <div class="container my-5"> 
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Contenu</th>
            <th scope="col">article_id</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                
            <tr>
              <th scope="row">{{$data->id}}</th>
              <td>{{$data->contenu}}</td>
              <td>{{$data->article_id}}</td>
              <td class="d-flex justify-content-evenly">
                  <a href="{{route('commentaires.show',$data->id)}}" class="btn btn-info">SHOW</a>
                  <a href="{{route('commentaires.edit',$data->id)}}" class="btn btn-warning">EDIT</a>
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
    </div>

@endsection