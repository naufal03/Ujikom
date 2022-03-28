<?php

namespace App\Http\Controllers;

use App\Models\facilityroom;
use App\Models\type;
use Illuminate\Http\Request;

class faskam extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faskam = facilityroom::with('type')->get();
        return view('admin.faskam.index', compact('faskam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type = type::all();
        return view('admin.faskam.create' ,compact('type'));
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
        $fk = new facilityroom();
        $fk->type_id = $request->input('type_id');
        $fk->facility1 = $request->input('facility1');
        $fk->facility2 = $request->input('facility2');
        $fk->facility3 = $request->input('facility3');
        $fk->facility4 = $request->input('facility4');
        $fk->facility5 = $request->input('facility5');
        $fk->save();
        return redirect()->route('faskam.index');
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
        $type = Type::all();
        $faskam = facilityroom::find($id);
        return view('admin.faskam.edit', compact('type','faskam'));
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
        $fk = facilityroom::find($id);
        $fk->type_id = $request->input('type_id');
        $fk->facility1 = $request->input('facility1');
        $fk->facility2 = $request->input('facility2');
        $fk->facility3 = $request->input('facility3');
        $fk->facility4 = $request->input('facility4');
        $fk->facility5 = $request->input('facility5');
        $fk->save();
        return redirect()->route('faskam.index');
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
        $fs = facilityroom::find($id);
        $fs->delete();
        return redirect()->route('faskam.index');

    }
}
