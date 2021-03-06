@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 add my-4">
                <a class="btn btn-secondary" href="{{route('admin.posts.create')}}" role="button">Create new post</a>
            </div>

            <div class="col-12 text-center">
                @forelse ($posts as $post)
                    <div class="card my-card mb-3 d-inline-block text-start">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$post->image}}" class="img-fluid rounded-start mb-2" alt="Current image">
                                @foreach ($categories as $category)
                                        <p class="m-0 rounded mb-1" style="background-color: {{$category->color}}">{{$category->category}}</p>
                                @endforeach
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$post->title}}</h5>
                                    <a href="{{route("admin.posts.show", $post)}}" type="button" class="btn btn-outline-primary btn-sm my-2">Read more</a>
                                    <p class="card-text">{{$post->description}}</p>
                                    <div class="d-flex justify-content-evenly">
                                        <p class="card-text"><small class="text-muted">Author: {{$post->author}}</small></p>
                                        <p class="card-text"><small class="text-muted">Vote: {{$post->vote}}</small></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5>There are no post to show</h5>
                @endforelse
                
            </div>
        </div>
    </div>
@endsection
