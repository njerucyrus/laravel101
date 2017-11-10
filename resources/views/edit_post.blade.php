@extends('layouts.base')

@section('content')
    <div class="card mb-4">
        <div class="container-fluid">
        <form>
            <div class="form-group">
                <label for="title">Title of the blog post</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter blog post title">
            </div>
            <div class="form-group">
                <label for="body">Blog content</label>
                <textarea id="body" name="body" class="form-control">

                </textarea>
            </div>
            <div class="form-group pull-right clearfix">
            <button type="submit" class="btn btn-xs btn-outline-primary">Post now</button>
            </div>
        </form>
        </div>
    </div>
    @endsection