<?php

namespace App\Http\Controllers;

use App\Models\Bgbanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BgbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bgbanner = Bgbanner::orderBy('id', 'asc')->first();
        return view('admin.bgbanner.index', compact('bgbanner'));
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
     * @param  \App\Models\Bgbanner  $bgbanner
     * @return \Illuminate\Http\Response
     */
    public function show(Bgbanner $bgbanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bgbanner  $bgbanner
     * @return \Illuminate\Http\Response
     */
    public function edit(Bgbanner $bgbanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bgbanner  $bgbanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bgbanner $bgbanner)
    {
        $rules = [
            'image_why_1' => 'image|file',
            'image_why_2' => 'image|file',
            'image_benefit' => 'image|file',
            'image_footer' => 'image|file',
            'bg_banner' => 'image|file',
            'image_skill' => 'image|file',
            'image_blog_right' => 'image|file',
            'image_service' => 'image|file',
            'image_sejarah' => 'image|file',

        ];

        $validated = $request->validate($rules);

        if ($request->file('image_why_1')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_why_1'] = $request->file('image_why_1')->store('post-image/bg_banner');
        };

        if ($request->file('image_why_2')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_why_2'] = $request->file('image_why_2')->store('post-image/bg_banner');
        };

        if ($request->file('image_benefit')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_benefit'] = $request->file('image_benefit')->store('post-image/bg_banner');
        };

        if ($request->file('image_footer')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_footer'] = $request->file('image_footer')->store('post-image/bg_banner');
        };

        if ($request->file('bg_banner')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['bg_banner'] = $request->file('bg_banner')->store('post-image/bg_banner');
        };
        if ($request->file('image_skill')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_skill'] = $request->file('image_skill')->store('post-image/bg_banner');
        };
        if ($request->file('image_blog_right')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_blog_right'] = $request->file('image_blog_right')->store('post-image/bg_banner');
        };
        if ($request->file('image_service')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_service'] = $request->file('image_service')->store('post-image/bg_banner');
        };
        if ($request->file('image_sejarah')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_sejarah'] = $request->file('image_sejarah')->store('post-image/bg_banner');
        };

        $bgbanner->update($validated);
        return redirect()->route('bgbanner.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bgbanner  $bgbanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bgbanner $bgbanner)
    {
        //
    }
}
