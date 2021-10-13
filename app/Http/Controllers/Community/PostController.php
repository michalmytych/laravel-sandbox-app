<?php

namespace App\Http\Controllers\Community;

use App\Models\Community\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('community.post.index', ['posts' => Post::all()]);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required',
                'subtitle' => 'required',
                'content' => 'required'
            ]);

            Post::create($request->input());

            return redirect()->route('community.post.index');
        }


        return view('community.post.form');
    }
}
