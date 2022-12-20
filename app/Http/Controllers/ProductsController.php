<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Katepro;
use App\Models\Katewar;
// Yng setiap page harus ada
use App\Models\Config;
use App\Models\Metamanagement;
use App\Models\Bgbanner;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::latest()->paginate(10);
        $katepros = Katepro::all();
        $katewars = Katewar::all();
        $top_product = Product::orderBy('view', 'DESC')->limit(3)->get();
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();


        $products = Product::when($request->search, function ($query) use ($request) {
            $query->where('judul', 'like', "%{$request->search}%");;
        })->orderBy('created_at')->paginate(10);

        $products->appends($request->only('search'));

        return view('homepage.products.index', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'products', 'katepros', 'katewars', 'top_product'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function show($id)
    {
        $products = Product::where('slug', $id)->first();
        $products->view += 1;
        $katepros = Katepro::all();
        $katewars = Katewar::all();
        $real_product = Product::where('kategori', $products->kategori)->limit(5)->get();
        // return $real_product;
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();

        $products->update();
        return view('homepage.products.detail-product', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'products', 'katepros', 'katewars', 'real_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
