@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($posts->count() > 0)
            <div class="card">
                <div class="card-header lead">All Posts</div>

                <div class="card-body">
                    @foreach ($posts as $post)
                        <h4><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></h4>
                        <p>{{ substr($post->body, 0, 100) }}</p>
                        @if (!$loop->last)
                            <hr>
                        @endif
                    @endforeach
                    {{ $posts->links() }}
                </div>
            </div>
            @else
            <div class="alert alert-info">
                    No posts found in database.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
