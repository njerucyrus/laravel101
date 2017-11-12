@extends('layouts.base')

@section('content')
    @if(Auth::check())
    <div class="card mb-4">
        <div class="container-fluid">
            <form method="post" action="{{route('posts.index')}}" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title of the blog post</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter blog post title">
                </div>
                <div class="form-group">
                    <label for="body">Blog content</label>
                    <textarea id="body" name="body" class="form-control">

                </textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="photo" class="form-control" value="upload image">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="posted_by" value="{{ Auth::id() }}">
                <div class="form-group pull-right clearfix">
                    <button type="submit" class="btn btn-xs btn-outline-primary">Post now</button>
                </div>

            </form>
        </div>
    </div>
    @else
         <div class="alert alert-info">
             You need to login to create a blog
             <a href="{{ route('login') }}" class="btn btn-primary">login now</a>
         </div>

    @endif
@endsection