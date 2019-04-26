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

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md">
                                    <input class="form-control" type="text" name="name" id="name" placeholder="name" required>
                                </div>
                                <div class="col-md">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="body" cols="30" rows="5" class="form-control" style="resize: none;" placeholder="have something to say?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
