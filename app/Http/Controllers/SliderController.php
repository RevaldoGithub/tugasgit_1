<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = Slider::all();
        return view('admin.slider.create', compact('slider'));
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
            'image_vidio' => 'required|file|mimetypes:video/mp4',
            'judul' => 'required',
            'content' => 'required',
        ]);
        // $image_vidio = $request->file('image_vidio')->store('post-vidio/slider');
        // $validated['image_vidio'] = $image_vidio;

        $image_vidio = new Slider;
        if ($request->hasFile('image_vidio')) {
            $path = $request->file('image_vidio')->store('videos', ['disk' => 'my_files']);
            $image_vidio->image_vidio = $path;
            $image_vidio->judul = $request->judul;
            $image_vidio->content = $request->content;
        }
        $image_vidio->save();

        // $fileName = $request->video->getClientOriginalName();
        // $filePath = 'videos/' . $fileName;

        // $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->image_vidio));

        // File URL to access the image_vidio in frontend
        // $url = Storage::disk('public')->url($filePath);

        // if ($isFileUploaded) {
        //     $image_vidio = new Slider();
        //     $image_vidio->title = $request->title;
        //     $image_vidio->path = $filePath;
        //     $image_vidio->save();
        // }

        return redirect()->route('slider.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $validated = [
            'image_vidio' => 'video|file',
            'judul' => 'required',
            'content' => 'required',
        ];

        $validated = $request->validate($validated);
        if ($request->file('image_vidio')) {
            if ($request->oldVideo) {
                Storage::delete($request->oldVideo);
            }
            $validated['image_vidio'] = $request->file('image_vidio')->store('post-image/slider');
        };
        $slider->update($validated);
        return redirect()->route('slider.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if ($slider->image_vidio) {
            Storage::delete($slider->image_vidio);
        }
        $slider->delete($slider->id);
        return redirect()->route('slider.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
