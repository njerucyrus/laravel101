@extends('layouts.base')
@section('content')
    <h5 class="my-4">Whats Happening
        <small><a href="{{route('posts.create')}} " class="btn-link">Make Post</a></small>
    </h5>
    @foreach($posts as $post)
    <!-- Blog Post -->
    <div class="card mb-4">
        <a href="/posts/{{$post->id}}/edit">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        </a>
            <div class="card-body">
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">
                {{ $post->body }}
            </p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
           <span style="color: green;">
               Posted {{ $post->created_at->diffForHumans() }} by {{$post->user->name }}
           </span>
          <div class="clearfix pull-right">
                <a href="#" class=""><span class="fa fa-2x fa-comment-o">comment</span></a>

                <a href="#" class=""><span class="fa fa-2x fa-heart-o">like</span></a>

                <a href="#" class=""><span class="fa fa-2x fa-share">share</span></a>
          </div>
        </div>
    </div>
    @endforeach



    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>
@endsection

@section('sidebar_widgets')
    @include('layouts.sidebar_widgets')
@endsection