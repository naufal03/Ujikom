<?php

namespace App\Http\Controllers;

use App\Models\FacilityRoom;
use App\Models\room;
use App\Models\transaction;
use Illuminate\Http\Request;

class FacilityRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resep = transaction::all();
        return view('user.form.index', compact('resep'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function show(FacilityRoom $facilityRoom)
    {
        //
        $resep = transaction::all();
        return view('user.form.index', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(FacilityRoom $facilityRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacilityRoom $facilityRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilityRoom  $facilityRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacilityRoom $facilityRoom)
    {
        //
    }
}
