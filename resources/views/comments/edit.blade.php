{{-- resources/views/blogs/edit.blade.php --}}
@extends('dashboard.index')

@section('content')
<div class="container">
    <h2>Edit Comment Post</h2>

    {{-- <h3>Editing Comment for Blog: {{ $blog->title }}</h3> --}}

    <form action="{{ route('comments.update', $comment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <textarea name="comment" class="form-control">{{ old('comment', $comment->comment) }}</textarea>

        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>

</div>
@endsection
