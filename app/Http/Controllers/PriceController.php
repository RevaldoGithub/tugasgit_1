<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = Price::all();
        return view('admin.price.index', compact('price'));
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
            'nama_paket' => 'required',
            'harga_bulan' => 'required',
            'status',
            'status_populer',
            'fasilitas_1',
            'fasilitas_2',
            'fasilitas_3',
            'fasilitas_4',
            'fasilitas_5',
            'fasilitas_6',
            'fasilitas_7',
            'fasilitas_8',
            'fasilitas_9',
            'fasilitas_10',
        ]);

        Price::create([
            'nama_paket' => $request->nama_paket,
            'harga_bulan' => $request->harga_bulan,
            'status' => $request->status,
            'status_populer' => $request->status_populer,
            'fasilitas_1' => $request->fasilitas_1,
            'fasilitas_2' => $request->fasilitas_2,
            'fasilitas_3' => $request->fasilitas_3,
            'fasilitas_4' => $request->fasilitas_4,
            'fasilitas_5' => $request->fasilitas_5,
            'fasilitas_6' => $request->fasilitas_6,
            'fasilitas_7' => $request->fasilitas_7,
            'fasilitas_8' => $request->fasilitas_8,
            'fasilitas_9' => $request->fasilitas_9,
            'fasilitas_10' => $request->fasilitas_10,
        ]);
        return redirect()->route('price.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view('admin.price.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $validated = [
            'nama_paket' => 'required',
            'harga_bulan' => 'required',
            'status',
            'status_populer',
            'fasilitas_1',
            'fasilitas_2',
            'fasilitas_3',
            'fasilitas_4',
            'fasilitas_5',
            'fasilitas_6',
            'fasilitas_7',
            'fasilitas_8',
            'fasilitas_9',
            'fasilitas_10',
        ];

        $validated = $request->validate($validated);
        $validated['status'] = $request->status;
        $validated['status_populer'] = $request->status_populer;
        $validated['fasilitas_1'] = $request->fasilitas_1;
        $validated['fasilitas_2'] = $request->fasilitas_2;
        $validated['fasilitas_3'] = $request->fasilitas_3;
        $validated['fasilitas_4'] = $request->fasilitas_4;
        $validated['fasilitas_5'] = $request->fasilitas_5;
        $validated['fasilitas_6'] = $request->fasilitas_6;
        $validated['fasilitas_7'] = $request->fasilitas_7;
        $validated['fasilitas_8'] = $request->fasilitas_8;
        $validated['fasilitas_9'] = $request->fasilitas_9;
        $validated['fasilitas_10'] = $request->fasilitas_10;

        $price->update($validated);
        return redirect()->route('price.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete($price->id);
        return redirect()->route('price.index')->with('success', 'Data Berhasil dihapus YGY:)');
    }
}
