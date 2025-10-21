@extends('dashboard.index')

@section('content')
<div class="container">
    <h2>Discussion Post</h2>

    {{-- Student Post Form --}}
    @if(auth()->user()->role == 2)
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label>Discussion Content</label>
                    <textarea name="content" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Publish</button>
            </form>
        </div>
    </div>
    @endif

    {{-- Show Blogs --}}
    @foreach($blogs as $blog)
        <div class="card mb-3">
            {{-- Blog Header --}}
            <div class="card-header">
                <strong>
                    @if($blog->user->role == 2)
                        Student: {{ $blog->user->name }}
                    @elseif($blog->user->role == 3)
                        Teacher: {{ $blog->user->name }}
                    @elseif($blog->user->role == 0)
                        Admin: {{ $blog->user->name }}
                    @else
                        {{ $blog->user->name }}
                    @endif
                </strong>

                {{-- Blog Edit/Delete Buttons --}}
                <span class="float-end">
                    @if(auth()->user()->id == $blog->user_id && auth()->user()->role == 2)
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    @elseif(auth()->user()->role == 0 && auth()->user()->id != $blog->user_id)
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    @endif
                </span>
            </div>

            {{-- Blog Content --}}
            <div class="card-body">
                <p>{{ $blog->content }}</p>
            </div>

            {{-- Comments --}}
            <div class="card-footer">
                <h6>Comments:</h6>
                @foreach($blog->comments as $comment)
                    <p>
                        <strong>
                            @if($comment->user->role == 2)
                                Student: {{ $comment->user->name }}
                            @elseif($comment->user->role == 3)
                                Teacher: {{ $comment->user->name }}
                            @elseif($comment->user->role == 0)
                                Admin: {{ $comment->user->name }}
                            @else
                                {{ $comment->user->name }}
                            @endif
                        </strong>
                        : {{ $comment->comment }}

                        {{-- Comment Edit/Delete Buttons --}}
                        @if(auth()->user()->id == $comment->user_id && auth()->user()->role == 3)
                            <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        @elseif(auth()->user()->role == 0 && auth()->user()->id != $comment->user_id)
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        @endif
                    </p>
                @endforeach

                {{-- Comment Form for Teacher/Admin --}}
                @if(auth()->user()->role == 1 || auth()->user()->role == 3)
                    <form action="{{ route('comments.store', $blog->id) }}" method="POST" class="mt-2">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="comment" class="form-control" placeholder="Write a comment..." required>
                            <button type="submit" class="btn btn-secondary">Send</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection
