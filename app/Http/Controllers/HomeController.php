<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\About;
use App\Models\Imageabout;
use App\Models\Why;
use App\Models\Price;
use App\Models\Product;
use App\Models\Benefit;
use App\Models\Porto;
use App\Models\Testi;
use App\Models\Sponsor;
use App\Models\Visitor;
// Yng setiap page harus ada
use App\Models\Config;
use App\Models\Metamanagement;
use App\Models\Bgbanner;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all()->first();
        $about = About::all()->first();
        $imgabout = Imageabout::all()->first();
        $why = Why::limit(3)->get();
        $prices = Price::limit(3)->get();
        $service = Service::limit(3)->get();
        $products = Product::limit(6)->get();
        $benefits = Benefit::skip(3)->take(3)->get();
        $benefit_left = Benefit::limit(3)->get();
        $portos = Porto::limit(6)->get();
        $testis = Testi::limit(4)->get();
        $blog_home = Blog::limit(5)->get();
        $sponsors = Sponsor::all();
        // Yng setiap page harus ada
        $config = Config::all()->first();
        $metamanagement = Metamanagement::all()->first();
        $bgbanner = Bgbanner::all()->first();
        $footer_blog = Blog::latest()->limit(3)->get();
        $footer_service = Service::latest()->limit(6)->get();

        $ip_now = $_SERVER['REMOTE_ADDR'];
        $validated = [
            'ip_address' => $ip_now,
            'visit_date' => date('Y-m-d'),
        ];
        Visitor::create($validated);
        return view('homepage.home.index', compact('config', 'metamanagement', 'bgbanner', 'footer_blog', 'footer_service', 'slider', 'about', 'imgabout', 'why', 'prices', 'service', 'products', 'benefits', 'benefit_left', 'portos', 'testis', 'blog_home', 'sponsors'));
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
