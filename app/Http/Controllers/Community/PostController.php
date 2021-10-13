<?php

namespace App\Http\Controllers\Community;

use Illuminate\Http\Request;
use App\Models\Community\Post;
use App\Http\Controllers\Controller;
use App\Models\EventSourcing\EventLog;

class PostController extends Controller
{
    public function index()
    {
        return view('community.post.index', [
            'posts' => Post::all(),
            'event_logs' => EventLog::all()
        ]);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required|unique:community_posts',
                'subtitle' => 'required',
                'content' => 'required'
            ]);

            Post::create($request->input());

            return redirect()->route('community.post.index');
        }


        return view('community.post.form');
    }
}
