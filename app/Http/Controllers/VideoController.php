<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create()
    {
        return view('admin.uploadvideo');
    }

    public function store(Request $req)
    {
        $req->validate([
            'video' => 'mimes:mp4,webm'
        ]);
        $video = new Video();
        $video->title= $req->title;
        $newvideo = time(). '.' .$req->video->extension();
        $req->video->move(public_path('Images'), $newvideo);
        $video->video = $newvideo;
        $video->save();
        return redirect()->route('admin.myvideo');
    }

    public function myvideo()
    {
        $videos = Video::all();
        return view('admin.myvideo', ['videos'=> $videos]);
    }

    public function index()
    {
        $videos = Video::all();

        return view('videos', ['videos'=>$videos]);
    }
}
