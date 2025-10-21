@extends('dashboard.index')

@section('content')
    <h1>Edit Blog</h1>
    <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <textarea name="content" class="form-control" rows="3" required>{{ $blog->content }}</textarea>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
@endsection
