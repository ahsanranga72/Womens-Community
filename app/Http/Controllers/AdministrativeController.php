<?php

namespace App\Http\Controllers;

use App\Models\Administrative;
use Illuminate\Http\Request;


class AdministrativeController extends Controller
{
    public function create()
    {
        return view('admin.addadministrative');
    }

    public function store(Request $req)
    {
        $add = new Administrative();
        $add->text = $req->text;
        $add->number = $req->number;
        $add->save();

        return redirect()->route('user.administrative');
    }

    public function index()
    {
        $addms = Administrative::all();

        return view('viewadministrative',['addms'=>$addms]);
    }
}
