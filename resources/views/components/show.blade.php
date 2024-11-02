@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex mb-3 border-bottom">
    <h1 class="h2">{{ $post->title }}</h1>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Details</h5>
        <h6 class="card-subtitle mb-2 text-muted">Author: {{ $post->author->name }}</h6>
        <p class="card-text">{{ $post->body }}</p>
    </div>
</div>

<a href="/dashboard/posts" class="btn btn-secondary">Back to Posts</a>
<a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit Post</a>

<form action="/dashboard/posts/{{ $post->id }}" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
</form>
@endsection
