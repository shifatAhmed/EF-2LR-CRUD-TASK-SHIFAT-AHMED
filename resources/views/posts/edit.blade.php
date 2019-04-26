@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Edit Post</div>

        <div class="card-body">
            <form action="{{ route('posts.update', ['post' => $post]) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}" required autofocus>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="15" class="form-control @error('body') is-invalid @enderror" required>{{ $post->body }}</textarea>
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
