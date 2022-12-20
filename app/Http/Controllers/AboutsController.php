<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Kelebihan;
use App\Models\Skill;
use App\Models\Testi;
// Yng setiap page harus ada
use App\Models\Config;
use App\Models\Metamanagement;
use App\Models\Bgbanner;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all()->first();
        $kelebihans = Kelebihan::limit(3)->get();
        $skills = Skill::limit(3)->get();
        $testis = Testi::all();
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();
        return view('homepage.abouts.index', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'about', 'kelebihans', 'skills', 'testis'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
