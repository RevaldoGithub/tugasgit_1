<?php

namespace App\Http\Controllers;


use App\Models\Sejarah;
use App\Models\Product;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Porto;
use App\Models\Sponsor;
use App\Models\Testi;
use App\Models\Benefit;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarah = Sejarah::count();
        $product = Product::count();
        $srv = Service::count();
        $blg = Blog::count();
        $porto = Porto::count();
        $sps = Sponsor::count();
        $tst = Testi::count();
        $bnf = Benefit::count();
        $visit_d = Visitor::where('visit_date', date('Y-m-d'))->count();
        $visit_t = Visitor::count();
        return view('admin.dashboard', compact('sejarah', 'product', 'srv', 'blg', 'porto', 'sps', 'tst', 'bnf', 'visit_d', 'visit_t'));
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
