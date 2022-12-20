<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Katepro;
use App\Models\Katewar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $katepro = Katepro::all();
        $katewar = Katewar::all();
        return view('admin.product.index', compact('product', 'katepro', 'katewar'));
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
            'nik' => 'required',
            'jenis' => 'required',
            'kph' => 'required',
            'harga',
            'harga_diskon',
            'kategori' => 'required',
            'kategori_warna' => 'required',
            'label_baru',
            'label_hot',
            'content' => 'required',
            'view' => 'required',
            'slug' => Str::slug($request->judul, '-'),
        ]);

        $image = $request->file('image')->store('post-image/product');
        $validated['image'] = $image;
        Product::create([
            'image' => $validated['image'],
            'judul' => $request->judul,
            'nik' => $request->nik,
            'jenis' => $request->jenis,
            'kph' => $request->kph,
            'harga' => $request->harga,
            'harga_diskon' => $request->harga_diskon,
            'kategori' => $request->kategori,
            'kategori_warna' => $request->kategori_warna,
            'label_baru' => $request->label_baru,
            'label_hot' => $request->label_hot,
            'content' => $request->content,
            'view' => $request->view,
            'slug' => Str::slug($request->judul, '-'),
        ]);
        return redirect()->route('product.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $katepro = Katepro::all();
        $katewar = Katewar::all();
        return view('admin.product.edit', compact('product', 'katepro', 'katewar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = [
            'image' => 'image|file',
            'judul' => 'required',
            'nik' => 'required',
            'jenis' => 'required',
            'kph' => 'required',
            'harga',
            'harga_diskon',
            'kategori' => 'required',
            'kategori_warna' => 'required',
            'label_baru',
            'label_hot',
            'content' => 'required',
            'view',
        ];

        $validated = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('post-image/product');
        };

        $validated['harga'] = $request->harga;
        $validated['harga_diskon'] = $request->harga_diskon;
        $validated['label_baru'] = $request->label_baru;
        $validated['label_hot'] = $request->label_hot;
        $validated['slug'] = Str::slug($request->judul, '-');
        $product->update($validated);
        return redirect()->route('product.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete($product->id);
        return redirect()->route('product.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
