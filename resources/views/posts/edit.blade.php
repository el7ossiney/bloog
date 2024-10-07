@extends('posts.layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Create New Post</h2>
    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('put')

      <!-- Item Name -->
      <div class="form-group">
        <label for="itemName">Book Name</label>
        <input type="text" class="form-control" value="{{$post->book_name}}" id="itemName" name="book_name" placeholder="Enter book name" required>
      </div>

      <div class="form-group">
        <label for="itemName">Email </label>
        <input type="email" class="form-control" id="itemName" value="{{$post->mail}}" name="email" placeholder="Enter your mail" required>
      </div>
      
      <!-- book Description -->
      <div class="form-group">
        <label for="bookDescription">Description</label>
        <textarea class="form-control" id="bookDescription" name="description"  rows="4" placeholder="Enter book description" required>{{$post->description}}</textarea>
      </div>
  

      <!-- Category -->
      <div class="form-group">
        <label for="bookCategory">Auther</label>
        <select class="form-control" id="bookCategory" name="user_id" required>
          <option value="" disabled selected>Select the Auther</option>
          @foreach ($user as $user)
          <option @selected($user->id == $post->user_id) value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        <div class="d-flex justify-content-center align-items-center mt-2" >
            <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </div>
@endsection
