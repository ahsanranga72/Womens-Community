<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class PostController extends Controller
{
    public function create()
    {
        return view('createpost');
    }

    public function store(Request $req)
    {
        $req->validate([
            'image' => 'mimes:jpg,png,jpeg'
        ]);

        $post = new Post();
        $post->title = $req->title;
        $post->desc = $req->desc;
        $newImage = time(). '.' .$req->image->extension();
        $req->image->move(public_path('Images'), $newImage);
        $post->image = $newImage;
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route('mypost');
    }

    public function mypost()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('mypost', ['posts'=>$posts]);
    }

    public function postedit( $id)
    {
        $post = Post::find($id);
        return view('editpost',['post'=>$post]);
    }

    public function updatepost(Request $req)
    {
        $post = Post::find($req->id);
        $post->title = $req->title;
        $post->desc = $req->desc;
        $newImage = time(). '.' .$req->image->extension();
        $req->image->move(public_path('Images'), $newImage);
        $post->image = $newImage;
        $post->user_id = Auth::user()->id;
        $post->save();
        return redirect()->route('mypost');
    }
}
