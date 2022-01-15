<?php

namespace App\Http\Controllers;

use App\Models\Psychiatrist;
use Illuminate\Http\Request;

class PsychiatristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewpsychiatrist()
    {
        $psys = Psychiatrist::all();
        return view('viewpsychiatrist', compact('psys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addpsychiatrist ()
    {
        return view('addpsychiatrist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepsychiatrist(Request $request)
    {
        $phy = new Psychiatrist;
        $phy->psyname = $request->psyname;
        $phy->psydetails = $request->psydetails;
        $phy->save();

        return redirect()->route('viewpsychiatrist');
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
