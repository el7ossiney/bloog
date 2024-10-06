@extends('posts.layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center mt-2" >
    <a href="{{route('posts.create')}}" class="btn btn-outline-success">Create</a>
</div>
    <table class="table mt-2 container" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Auther</th>
            <th scope="col">Book Name</th>
            <th scope="col">Mail</th>
            <th scope="col" colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->user->name}}</td>
            <td>{{$post->book_name}}</td>
            <td>{{$post->mail}}</td>
            <td colspan="3" class="inline">
                <a class="btn btn-sm btn-outline-primary d-inline" href="#">View</a>
                <a class="btn btn-sm btn-outline-success d-inline" href="#">Edit</a>
                <form action="" method="post" class="d-inline">
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
                
            </td>
          </tr>
          @empty
              <th colspan="7">No data defined</th>
          @endforelse
        </tbody>
      </table>
</body>
</html>
@endsection