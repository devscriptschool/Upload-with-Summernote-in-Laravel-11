<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{

    public function create(): View
    {
        return view('postsCreate');
    }


    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back()
            ->with('success','Post created successfully.');
    }
}
