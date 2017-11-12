@extends('layouts.base')

@section('content')
    <div class="card mb-4">
        <div class="container-fluid">
            <form method="post">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="title">Edit post</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$post->title }}"
                           placeholder="Enter blog post title">
                </div>
                <div class="form-group">
                    <label for="body">Blog content</label>
                    <textarea id="body" name="body" class="form-control">
                    {{$post->body}}
                </textarea>
                </div>

                <div class="form-group pull-right clearfix">
                    <button type="submit" class="btn btn-xs btn-outline-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection