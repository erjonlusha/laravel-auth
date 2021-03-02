@extends('layouts.dashboard')

@section('content')

<h1>Edit {{$post->title}}</h1>
<form action="{{route('admin.posts.update', ['post'=> $post->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input required class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="slug">slug</label>
        <input required class="form-control" type="text" name="slug" id="slug" value="{{$post->slug}}">
    </div>

    <div class="form-group">
      <label for="body">Body</label>
      <textarea required class="form-control" name="body" id="body" rows="3">{{$post->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection