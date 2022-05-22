@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @forelse ($posts as $post)
                    <div class="card my-card mb-3 d-inline-block text-start">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$post->image}}" class="img-fluid rounded-start" alt="Current image">
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