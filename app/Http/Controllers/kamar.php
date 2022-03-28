<?php

namespace App\Http\Controllers;

use App\Models\Kamar as ModelsKamar;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class kamar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $kamar = Room::with('type')->get();
        return view('admin.kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type = Type::all();
        return view('admin.kamar.create', compact('type'));
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
        // $room = $request->all();
        // Room::create($room);
        $kr = new Room();
        $kr->type_id = $request->input('type_id');
        $kr->number = $request->input('number');
        $kr->capacity = $request->input('capacity');
        $kr->price = $request->input('price');
        $kr->save();
        return redirect()->route('kamar.index');
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
        $kamar = Room::find($id);
        return view('admin.kamar.edit', compact('type', 'kamar'));
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
        $kr = Room::find($id);
        $kr->type_id = $request->input('type_id');
        $kr->number = $request->input('number');
        $kr->capacity = $request->input('capacity');
        $kr->price = $request->input('price');
        $kr->save();
        return redirect()->route('kamar.index');
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
        $kr = Room::find($id);
        $kr->delete();
        return redirect()->route("kamar.index");
    }
}
