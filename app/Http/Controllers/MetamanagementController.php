<?php

namespace App\Http\Controllers;

use App\Models\Metamanagement;
use Illuminate\Http\Request;

class MetamanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metamanagement = Metamanagement::orderBy('id', 'asc')->first();
        return view('admin.metamanagement.index', compact('metamanagement'));
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
     * @param  \App\Models\Metamanagement  $metamanagement
     * @return \Illuminate\Http\Response
     */
    public function show(Metamanagement $metamanagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metamanagement  $metamanagement
     * @return \Illuminate\Http\Response
     */
    public function edit(Metamanagement $metamanagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Metamanagement  $metamanagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metamanagement $metamanagement)
    {
        $rules = [
            'meta_title'  => 'required',
            'meta_deskripsi' => 'required',
            'meta_keywords' => 'required',
            'meta_search_engine' => 'required',
            'meta_website' => 'required',
            'meta_author' => 'required'
        ];

        $validated = $request->validate($rules);
        $metamanagement->update($validated);
        return redirect()->route('metamanagement.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metamanagement  $metamanagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metamanagement $metamanagement)
    {
        //
    }
}
