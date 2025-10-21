<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $blogId)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        Comment::create([
            'blog_id' => $blogId,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Comment added!');
    }
    public function edit(Comment $comment)
    {
        if (Auth::user()->role == 3 && $comment->user_id == Auth::id()) {
            return view('comments.edit', compact('comment'));
        }
        abort(403, 'Unauthorized');
    }

    // Update Comment
    public function update(Request $request, Comment $comment)
    {
        if (Auth::user()->role == 3 && $comment->user_id == Auth::id()) {
            $request->validate([
                'comment' => 'required',
            ]);
            $comment->update([
                'comment' => $request->comment,
            ]);
            return redirect()->route('blogs.index')->with('success', 'Comment updated!');
        }
        abort(403, 'Unauthorized');
    }

    // Delete Comment
    public function destroy(Comment $comment)
    {
        // Teacher deletes own comment, Admin deletes others
        if ((Auth::user()->role == 3 && $comment->user_id == Auth::id()) ||
            (Auth::user()->role == 0 && $comment->user_id != Auth::id())) {
            $comment->delete();
            return back()->with('success', 'Comment deleted!');
        }
        abort(403, 'Unauthorized');
    }
}
