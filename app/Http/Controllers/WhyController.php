<?php

namespace App\Http\Controllers;

use App\Models\Why;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $why = Why::all();
        return view('admin.why.index', compact('why'));
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
            'image' => 'image|file|required',
            'judul' => 'required',
            'content' => 'required',
        ]);

        $image = $request->file('image')->store('post-image/why');
        $validated['image'] = $image;
        Why::create([
            'image' => $validated['image'],
            'judul' => $request->judul,
            'content' => $request->content,
        ]);
        return redirect()->route('why.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function show(Why $why)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function edit(Why $why)
    {
        return view('admin.why.edit', compact('why'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Why $why)
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
            $validated['image'] = $request->file('image')->store('post-image/why');
        };
        $why->update($validated);
        return redirect()->route('why.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Why  $why
     * @return \Illuminate\Http\Response
     */
    public function destroy(Why $why)
    {
        if ($why->image) {
            Storage::delete($why->image);
        }
        $why->delete($why->id);
        return redirect()->route('why.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
