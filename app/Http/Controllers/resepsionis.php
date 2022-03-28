<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\type;
use Illuminate\Http\Request;

class resepsionis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request) {
            $resep = transaction::where('name', 'like', '%'.$request->cari.'%')->get();
        } else {
            $resep = transaction::with('type')->get();
        }

        return view('admin.resepsionis.index', compact('resep', 'request'));
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
        return view('user.form.index', compact('type'));
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
        $rs = new transaction();
        $rs->name = $request->input('name');
        $rs->nohp = $request->input('nohp');
        $rs->type_id = $request->input('type_id');
        $rs->check_in = $request->input('check_in');
        $rs->check_out = $request->input('check_out');
        $rs->jumlah = $request->input('jumlah');
        $rs->save();
        return redirect()->route('menu.index');
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
        $rs = transaction::find($id);
        $rs->delete();
        return redirect()->route('resepsionis.index');
    }
}
