@extends('layouts.admin')

@section('content')
    @if ($posts->count() > 0)
        <div class="card">
            <div class="card-header">Posts</div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $index => $post)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->created_at->diffForHumans() }}</td>
                                    <td style="width: 20%">
                                        <button class="btn btn-sm btn-primary">Edit</button>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="event.preventDefault();
                                            if (confirm('Are you sure?')) {
                                                document.getElementById('post-delete-form-{{ $post->id }}').submit();
                                            }"
                                        >Delete</button>
                                        <form id="post-delete-form-{{ $post->id }}" action="{{ route('posts.destroy', ['post' => $post]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-info">
            No posts found in database.
        </div>
    @endif
@endsection
