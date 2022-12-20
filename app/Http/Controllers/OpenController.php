<?php

namespace App\Http\Controllers;

use App\Models\Open;
use Illuminate\Http\Request;

class OpenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $open = Open::all();
        return view('admin.open.index', compact('open'));
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
        $validated = $request->validate([
            'hari' => 'required',
            'jam' => 'required',
        ]);

        Open::create([
            'hari' => $request->hari,
            'jam' => $request->jam,
        ]);
        return redirect()->route('open.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Open  $open
     * @return \Illuminate\Http\Response
     */
    public function show(Open $open)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Open  $open
     * @return \Illuminate\Http\Response
     */
    public function edit(Open $open)
    {
        return view('admin.open.edit', compact('open'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Open  $open
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Open $open)
    {
        $validated = [
            'hari' => 'required',
            'jam' => 'required',
        ];

        $validated = $request->validate($validated);
        $open->update($validated);
        return redirect()->route('open.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Open  $open
     * @return \Illuminate\Http\Response
     */
    public function destroy(Open $open)
    {
        $open->delete($open->id);
        return redirect()->route('open.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
