<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->join('posts', 'comments.post_id', '=', 'posts.id')
            ->get();
        return view('home', compact('posts', 'comments'));
    }

    public function postcomment(Request $request, $id)
    {

        $comment = new Comment;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $id;
        $comment->comment = $request->postcommet;
        $comment->save();

        return redirect()->route('home');
    }
}
