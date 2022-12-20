<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kateblog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        $kateblog = Kateblog::all();
        return view('admin.blog.index', compact('blog', 'kateblog'));
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
            'kategori' => 'required',
            'kelebihan',
            'qoutes',
            'content' => 'required',
            'tags' => 'required',
            'slug' => Str::slug($request->judul, '-'),
        ]);

        $image = $request->file('image')->store('post-image/blog');
        $validated['image'] = $image;
        $validated['tanggal'] = date('M d, Y');
        Blog::create([
            'image' => $validated['image'],
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'tanggal' => $validated['tanggal'],
            'qoutes' => $request->qoutes,
            'content' => $request->content,
            'tags' => $request->tags,
            'slug' => Str::slug($request->judul, '-'),
        ]);
        return redirect()->route('blog.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $kateblog = Kateblog::all();
        return view('admin.blog.edit', compact('blog', 'kateblog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = [
            'image' => 'image|file',
            'judul' => 'required',
            'kategori' => 'required',
            'kelebihan',
            'qoutes',
            'content' => 'required',
            'tags' => 'required',
        ];

        $validated = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/blog');
        };

        $validated['kelebihan'] = $request->kelebihan;
        $validated['qoutes'] = $request->qoutes;
        $validated['slug'] = Str::slug($request->judul, '-');
        $blog->update($validated);
        return redirect()->route('blog.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::delete($blog->image);
        }
        $blog->delete($blog->id);
        return redirect()->route('blog.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
