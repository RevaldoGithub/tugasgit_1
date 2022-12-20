<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view('admin.service.create', compact('service'));
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
            'image_1' => 'image|file',
            'image_2'  => 'image|file',
            'image_icon'  => 'image|file',
            'judul' => 'required',
            'content' => 'required',
            'slug' => Str::slug($request->judul, '-'),
        ]);

        $image = $request->file('image')->store('post-image/service');
        $validated['image'] = $image;
        if ($request->file('image_1') == null) {
            $image_1 =  $request->file('image_1') == null;
        } else {
            $image_1 = $request->file('image_1')->store('post-image/service');
        };
        $validated['image_1'] = $image_1;

        if ($request->file('image_2') == null) {
            $image_2 =   $request->file('image_2') == null;
        } else {
            $image_2 = $request->file('image_2')->store('post-image/service');
        };
        $validated['image_2'] = $image_2;

        if ($request->file('image_icon') == null) {
            $image_icon = $request->file('image_icon') == null;
        } else {
            $image_icon = $request->file('image_icon')->store('post-image/service');
        };
        $validated['image_icon'] = $image_icon;


        Service::create([
            'image' => $validated['image'],
            'image_1' => $validated['image_1'],
            'image_2' => $validated['image_2'],
            'image_icon' => $validated['image_icon'],
            'judul' => $request->judul,
            'content' => $request->content,
            'slug' => Str::slug($request->judul, '-'),
        ]);
        return redirect()->route('service.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
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
            $validated['image'] = $request->file('image')->store('post-image/service');
        };
        if ($request->file('image_1')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_1'] = $request->file('image_1')->store('post-image/service');
        };
        if ($request->file('image_2')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_2'] = $request->file('image_2')->store('post-image/service');
        };
        if ($request->file('image_icon')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_icon'] = $request->file('image_icon')->store('post-image/service');
        };


        $validated['slug'] = Str::slug($request->judul, '-');
        $service->update($validated);
        return redirect()->route('service.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete($service->image);
        }
        if ($service->image_1) {
            Storage::delete($service->image_1);
        }
        if ($service->image_2) {
            Storage::delete($service->image_2);
        }
        if ($service->image_icon) {
            Storage::delete($service->image_icon);
        }
        $service->delete($service->id);
        return redirect()->route('service.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
