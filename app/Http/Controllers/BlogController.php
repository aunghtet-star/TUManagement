<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user','comments.user')->latest()->get();
        return view('blog', compact('blogs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Blog::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return back()->with('success', 'Blog created successfully!');
    }
    public function edit(Blog $blog)
    {
        if (Auth::user()->role == 2 && $blog->user_id == Auth::id()) {
            return view('blogs.edit', compact('blog'));
        }
        abort(403, 'Unauthorized');
    }

    // Update Blog
    public function update(Request $request, Blog $blog)
    {
        if (Auth::user()->role == 2 && $blog->user_id == Auth::id()) {
            $request->validate([
                'content' => 'required',
            ]);
            $blog->update([
                'content' => $request->content,
            ]);
            return redirect()->route('blogs.index')->with('success', 'Blog updated!');
        }
        abort(403, 'Unauthorized');
    }

    // Delete Blog
    public function destroy(Blog $blog)
    {
        // Student can delete own post, Admin can delete any
        if ((Auth::user()->role == 2 && $blog->user_id == Auth::id()) ||
            (Auth::user()->role == 0 && $blog->user_id != Auth::id())) {
            $blog->delete();
            return back()->with('success', 'Blog deleted!');
        }
        abort(403, 'Unauthorized');
    }
}


