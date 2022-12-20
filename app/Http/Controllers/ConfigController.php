<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::orderBy('id', 'asc')->first();
        return view('admin.config.index', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $config = Config::all();
        return view('admin.config.create', compact('config'));
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
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $rules = [
            'logo' => 'image|file',
            'favicon' => 'image|file',
            'logo_footer' => 'image|file',
            'title' => 'required',
            'metadata' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'fb' => 'required',
            'twiter' => 'required',
            'youtube' => 'required',
            'tiktok' => 'required',
            'ig' => 'required',
            'wa' => 'required',
        ];

        $validated = $request->validate($rules);
        if ($request->file('logo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['logo'] = $request->file('logo')->store('post-image/config');
        };
        if ($request->file('favicon')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['favicon'] = $request->file('favicon')->store('post-image/config');
        };
        if ($request->file('logo_footer')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['logo_footer'] = $request->file('logo_footer')->store('post-image/config');
        };

        $config->update($validated);
        return redirect()->route('config.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        //
    }
}
