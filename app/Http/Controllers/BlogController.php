<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewblog()
    {
       return view('viewblog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createblog()
    {
        return view('admin.createblog');
    }

    public function addblog(Request $req)
    {
        $req->validate([
            'image' => 'mimes:jpg,png,jpeg'
        ]);

        $blog = new Blog();
        $blog->title = $req->title;
        $blog->desc = $req->desc;
        $newImage = time(). '.' .$req->image->extension();
        $req->image->move(public_path('Images'), $newImage);
        $blog->image = $newImage;
        $blog->save();
        return redirect()->route('viewblog');
    }


    public function myblog()
    {
        $blogs = Blog::all();
        return view('admin.myblogs', ['blogs'=>$blogs]);
    }

    public function index()
    {
        $blogs = Blog::all();

        return view('viewblog',['blogs'=>$blogs]);
    }
    public function blogedit($id)
    {
        $blog = Blog::find($id);
        return view('admin.editblog',['blog'=>$blog]);
    }

    public function blogupdate(Request $req)
    {
        $blog = Blog::find($req->id);
        $blog->title = $req->title;
        $blog->desc = $req->desc;
        $newImage = time(). '.' .$req->image->extension();
        $req->image->move(public_path('Images'), $newImage);
        $blog->image = $newImage;
        $blog->save();
        return redirect()->route('admin.myblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
