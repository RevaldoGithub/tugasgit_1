<?php

namespace App\Http\Controllers;

use App\Models\Kateblog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KateblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kateblog = Kateblog::all();
        return view('admin.kateblog.index', compact('kateblog'));
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

        Kateblog::create([
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->kategori, '-'),
        ]);
        return redirect()->route('kateblog.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kateblog  $kateblog
     * @return \Illuminate\Http\Response
     */
    public function show(Kateblog $kateblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kateblog  $kateblog
     * @return \Illuminate\Http\Response
     */
    public function edit(Kateblog $kateblog)
    {
        return view('admin.kateblog.edit', compact('kateblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kateblog  $kateblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kateblog $kateblog)
    {
        $validated = [
            'kategori' => 'required'
        ];

        $validated = $request->validate($validated);
        $validated['slug'] = Str::slug($request->kategori, '-');
        $kateblog->update($validated);
        return redirect()->route('kateblog.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kateblog  $kateblog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kateblog $kateblog)
    {
        $kateblog->delete($kateblog->id);
        return redirect()->route('kateblog.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
