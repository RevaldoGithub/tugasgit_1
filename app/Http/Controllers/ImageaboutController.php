<?php

namespace App\Http\Controllers;

use App\Models\Imageabout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageaboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageabout = Imageabout::orderBy('id', 'asc')->first();
        return view('admin.imageabout.index', compact('imageabout'));
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
     * @param  \App\Models\Imageabout  $imageabout
     * @return \Illuminate\Http\Response
     */
    public function show(Imageabout $imageabout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imageabout  $imageabout
     * @return \Illuminate\Http\Response
     */
    public function edit(Imageabout $imageabout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imageabout  $imageabout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imageabout $imageabout)
    {
        $rules = [
            'image_1' => 'image|file',
            'image_2' => 'image|file',
            'image_3' => 'image|file',
            'image_4' => 'image|file',
            'image_5' => 'image|file',

        ];

        $validated = $request->validate($rules);

        if ($request->file('image_1')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_1'] = $request->file('image_1')->store('post-image/bg_banner');
        };

        if ($request->file('image_2')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_2'] = $request->file('image_2')->store('post-image/bg_banner');
        };

        if ($request->file('image_3')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_3'] = $request->file('image_3')->store('post-image/bg_banner');
        };

        if ($request->file('image_4')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_4'] = $request->file('image_4')->store('post-image/bg_banner');
        };

        if ($request->file('image_5')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_5'] = $request->file('image_5')->store('post-image/bg_banner');
        };

        $imageabout->update($validated);
        return redirect()->route('imageabout.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imageabout  $imageabout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imageabout $imageabout)
    {
        //
    }
}
