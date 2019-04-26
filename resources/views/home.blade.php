@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        <ul class="list-group-flush">
            <li class="list-group-item">Posts: {{ $postCount }}</li>
            <li class="list-group-item">Comments: {{ $commentCount }}</li>
        </ul>
    </div>
</div>
@endsection
