<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Team::all();
        return view('admin.team.create', compact('team'));
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
            'posisi' => 'required',
            'fb',
            'twiter',
            'youtube',
            'tiktok',
            'ig',
            'wa',
        ]);

        $image = $request->file('image')->store('post-image/team');
        $validated['image'] = $image;
        Team::create([
            'image' => $validated['image'],
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'fb' => $request->fb,
            'twiter' => $request->twiter,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
            'ig' => $request->ig,
            'wa' => $request->wa,
        ]);
        return redirect()->route('team.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $validated = [
            'image' => 'image|file',
            'nama' => 'required',
            'posisi' => 'required',
            'fb',
            'twiter',
            'youtube',
            'tiktok',
            'ig',
            'wa',
        ];

        $validated = $request->validate($validated);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/team');
        };

        $validated['fb'] = $request->fb;
        $validated['twiter'] = $request->twiter;
        $validated['youtube'] = $request->youtube;
        $validated['tiktok'] = $request->tiktok;
        $validated['ig'] = $request->ig;
        $validated['wa'] = $request->wa;
        $team->update($validated);
        return redirect()->route('team.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::delete($team->image);
        }
        $team->delete($team->id);
        return redirect()->route('team.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
