@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">Create Post</div>

        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" rows="15" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
