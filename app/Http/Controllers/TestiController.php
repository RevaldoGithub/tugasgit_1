<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testi::all();
        return view('admin.testimonial.index', compact('testimonial'));
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
            'nama' => 'required',
            'content' => 'required',
            'company' => 'required',
        ]);

        $image = $request->file('image')->store('post-image/testimonial');
        $validated['image'] = $image;

        Testi::create($validated);
        return redirect()->route('testimonial.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function edit(Testi $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testi $testimonial)
    {
        $rules = [
            'image' => 'image|file',
            'nama' => 'required',
            'content' => 'required',
            'company' => 'required',
        ];

        $validated = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/testimonial');
        };

        $testimonial->update($validated);
        return redirect()->route('testimonial.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testi $testimonial)
    {
        if ($testimonial->image) {
            Storage::delete($testimonial->image);
        }
        $testimonial->delete($testimonial->id);
        return redirect()->route('testimonial.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
