<?php

namespace App\Http\Controllers;

use App\Models\Kateblog;
// Yng setiap page harus ada
use App\Models\Config;
use App\Models\Metamanagement;
use App\Models\Bgbanner;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(9);
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();
        return view('homepage.blogs.index', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'blogs'))->with('i', (request()->input('page', 1) - 1) * 9);
    }
    public function show($id)
    {
        $blogs = Blog::where('slug', $id)->first();
        $recent_blog = Blog::latest()->limit(4)->get();
        $real_blog = Blog::latest()->limit(2)->get();
        $kateblog = Kateblog::all();
        $kateblogs = Blog::all();
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();
        return view('homepage.blogs.detail-blog', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'blogs', 'recent_blog', 'kateblog', 'real_blog', 'kateblogs'))->with('i', (request()->input('page', 1) - 1) * 9);
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
