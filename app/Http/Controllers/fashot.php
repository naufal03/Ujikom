<?php

namespace App\Http\Controllers;

use App\Models\facility;
use Illuminate\Http\Request;

class fashot extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fashot = facility::all();
        return view('admin.fashot.index', compact('fashot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.fashot.create');
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
        $fh = new facility();
        $fh->name = $request->input('name');
        $fh->detail = $request->input('detail');
        $fh->save();
        return redirect()->route('fashot.index');
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
        $fashot = facility::find($id);
        return view('admin.fashot.edit', compact('fashot'));
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
        $fh = facility::find($id);
        $fh->name = $request->input('name');
        $fh->detail = $request->input('detail');
        $fh->save();
        return redirect()->route('fashot.index');
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
        $fh = facility::find($id);
        $fh->delete();
        return redirect()->route('fashot.index');
    }
}
