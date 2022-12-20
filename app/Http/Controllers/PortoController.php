<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porto = Porto::all();
        return view('admin.porto.index', compact('porto'));
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
        ]);

        $image = $request->file('image')->store('post-image/porto');
        $validated['image'] = $image;

        Porto::create([
            'image' => $validated['image'],
            'judul' => $request->judul,
        ]);
        return redirect()->route('porto.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function show(Porto $porto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function edit(Porto $porto)
    {
        return view('admin.porto.edit', compact('porto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porto $porto)
    {
        $validated = [
            'image' => 'image|file',
            'judul' => 'required',
        ];

        $validated = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/porto');
        };
        $porto->update($validated);
        return redirect()->route('porto.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porto  $porto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porto $porto)
    {
        if ($porto->image) {
            Storage::delete($porto->image);
        }
        $porto->delete($porto->id);
        return redirect()->route('porto.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
