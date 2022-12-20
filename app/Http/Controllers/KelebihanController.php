<?php

namespace App\Http\Controllers;

use App\Models\Kelebihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelebihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelebihan = Kelebihan::all();
        return view('admin.kelebihan.index', compact('kelebihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelebihan = Kelebihan::all();
        return view('admin.kelebihan.create', compact('kelebihan'));
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
            'image' => 'image|file|required',
            'judul' => 'required',
            'content' => 'required',
        ]);

        $image = $request->file('image')->store('post-image/kelebihan');
        $validated['image'] = $image;

        Kelebihan::create([
            'image' => $validated['image'],
            'judul' => $request->judul,
            'content' => $request->content,
        ]);
        return redirect()->route('kelebihan.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelebihan  $kelebihan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelebihan $kelebihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelebihan  $kelebihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelebihan $kelebihan)
    {
        return view('admin.kelebihan.edit', compact('kelebihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelebihan  $kelebihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelebihan $kelebihan)
    {
        $validated = [
            'image' => 'image|file',
            'judul' => 'required',
            'content' => 'required',
        ];

        $validated = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/kelebihan');
        };
        $kelebihan->update($validated);
        return redirect()->route('kelebihan.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelebihan  $kelebihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelebihan $kelebihan)
    {
        if ($kelebihan->image) {
            Storage::delete($kelebihan->image);
        }
        $kelebihan->delete($kelebihan->id);
        return redirect()->route('kelebihan.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
