<?php

namespace App\Http\Controllers;

use App\Models\Katepro;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KateproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katepro = Katepro::all();
        return view('admin.katepro.index', compact('katepro'));
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
            'kategori' => 'required',
            'slug' => Str::slug($request->kategori, '-'),
        ]);

        Katepro::create([
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->kategori, '-'),
        ]);
        return redirect()->route('katepro.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katepro  $katepro
     * @return \Illuminate\Http\Response
     */
    public function show(Katepro $katepro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Katepro  $katepro
     * @return \Illuminate\Http\Response
     */
    public function edit(Katepro $katepro)
    {
        return view('admin.katepro.edit', compact('katepro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katepro  $katepro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katepro $katepro)
    {
        $validated = [
            'kategori' => 'required'
        ];

        $validated = $request->validate($validated);
        $validated['slug'] = Str::slug($request->kategori, '-');
        $katepro->update($validated);
        return redirect()->route('katepro.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katepro  $katepro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katepro $katepro)
    {
        $katepro->delete($katepro->id);
        return redirect()->route('katepro.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
