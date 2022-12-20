<?php

namespace App\Http\Controllers;

use App\Models\Katewar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KatewarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katewar = Katewar::all();
        return view('admin.katewar.index', compact('katewar'));
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
            'kategori_warna' => 'required',
            'warna' => 'required',
            'slug' => Str::slug($request->kategori_warna, '-'),
        ]);

        Katewar::create([
            'kategori_warna' => $request->kategori_warna,
            'warna' => $request->warna,
            'slug' => Str::slug($request->kategori_warna, '-'),
        ]);
        return redirect()->route('katewar.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katewar  $katewar
     * @return \Illuminate\Http\Response
     */
    public function show(Katewar $katewar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Katewar  $katewar
     * @return \Illuminate\Http\Response
     */
    public function edit(Katewar $katewar)
    {
        return view('admin.katewar.edit', compact('katewar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katewar  $katewar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katewar $katewar)
    {
        $validated = [
            'kategori_warna' => 'required',
            'warna' => 'required'
        ];

        $validated = $request->validate($validated);
        $validated['slug'] = Str::slug($request->kategori_warna, '-');
        $katewar->update($validated);
        return redirect()->route('katewar.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katewar  $katewar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katewar $katewar)
    {
        $katewar->delete($katewar->id);
        return redirect()->route('katewar.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
