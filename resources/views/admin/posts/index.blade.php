@extends('layouts.dashboard')

@section('content')
    <h1>Index Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row">{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a href="{{route('admin.posts.show', ['post'=> $post->id])}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{route('admin.posts.edit', ['post'=> $post->id])}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modelId">
                          <i class="fas fa-trash"></i>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete post {{$post->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        <form action="{{route('admin.posts.destroy', ['post'=> $post->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection