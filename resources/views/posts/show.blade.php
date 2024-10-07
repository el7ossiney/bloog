@extends('posts.layouts.app')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Book Information</h2>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Auther Information</h5>
                        <p class="card-text"></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Auther:</strong> {{$data->user->name}}</li>
                            <li class="list-group-item"><strong>ID:</strong> {{$data->user->id}}</li>
                            <li class="list-group-item"><strong>Mail:</strong> {{$data->mail}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Book Information</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Book Name:</strong> {{$data->book_name}} </li>
                            <li class="list-group-item"><strong>ID:</strong> {{$data->id}}</li>
                            <li class="list-group-item"><strong>Description:</strong> {{$data->description}}</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
