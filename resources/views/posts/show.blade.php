@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-3">
                <div class="card-header">
                    {{ $post->title }}
                    @auth <a href="{{ route('posts.edit', ['post' => $post]) }}" class="btn btn-sm btn-primary float-right">Edit</a> @endauth
                </div>

                <div class="card-body">
                    <p>{{ $post->body }}</p>
                </div>

                <div class="card-footer"><small>Posted {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</small></div>
            </div>
        </div>
    </div>

    @if ($post->comments->count() > 0)
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class="card-header lead">Comments</div>
                    @foreach ($post->comments as $comment)
                        <div class="card-body">
                            <p> {{ $comment->name }} said {{ $comment->created_at->diffForHumans() }}</p>
                            <p>{{ $comment->body }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('comments.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="name" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="body" cols="30" rows="5" class="form-control @error('body') is-invalid @enderror" style="resize: none;" placeholder="have something to say?" required></textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
