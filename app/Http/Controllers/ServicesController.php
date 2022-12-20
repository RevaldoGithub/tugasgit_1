<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Sejarah;
// Yng setiap page harus ada
use App\Models\Config;
use App\Models\Metamanagement;
use App\Models\Bgbanner;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all()->first();
        $services = Service::paginate(6);
        $sejarah = Sejarah::orderBy('tahun', 'ASC')->limit(5)->get();
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();
        return view('homepage.services.index', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'services', 'sejarah', 'about'))->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function show($id)
    {
        $services = Service::where('slug', $id)->first();
        $service_left = Service::latest()->limit(6)->get();
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();
        return view('homepage.services.detail-service', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'services', 'service_left'));
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
