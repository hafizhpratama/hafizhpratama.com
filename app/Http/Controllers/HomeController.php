<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $posts = BlogPost::all();
            return view('admin.dashboard', [
                'posts' => $posts,
                'success' => 'You are logged in!'
            ]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $posts = BlogPost::orderBy('id', 'DESC')->take(3)->get();
        return view('welcome', [
            'posts' => $posts,
            'page' => 'home',
        ]);
    }
}
