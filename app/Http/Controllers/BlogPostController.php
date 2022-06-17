<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::paginate(6);
        return view('blog', [
            'posts' => $posts,
            'page' => 'blog',
        ]);
    }

    public function create()
    {
        if (Auth::check()) {
            return view('admin.create');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function store(Request $request)
    {
        $id = Auth::id();
        $path = $request->file('image')->store('public/images');

        $newPost = BlogPost::create([
            'title' => $request->title,
            'content' => $request->content,
            'url' => $request->title,
            'user_id' => $id,
            'image' => $path
        ]);

        $posts = BlogPost::all();
        return redirect()->route('dashboard', [
            'posts' => $posts,
        ])->withSuccess('Article create completed!');
    }

    public function show(BlogPost $blogPost, $url)
    {
        $blogPost = BlogPost::where('url', $url)->first();
        $d = strtotime($blogPost->created_at);
        $created_at = date("M d , Y", $d);
        return view('show', [
            'post' => $blogPost,
            'created_at' => $created_at,
            'page' => 'blog'
        ]);
    }


    public function edit(BlogPost $blogPost)
    {
        if (Auth::check()) {
            return view('admin.edit', [
                'post' => $blogPost,
            ]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function update(Request $request, BlogPost $blogPost)
    {
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $blogPost->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $path
            ]);
        } else {
            $blogPost->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
        }

        $posts = BlogPost::all();
        return redirect()->route('dashboard', [
            'posts' => $posts,
        ])->withSuccess('Article update completed!');
    }


    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        $posts = BlogPost::all();
        return redirect()->route('dashboard', [
            'posts' => $posts,
        ])->withSuccess('Article delete completed!');
    }
}
