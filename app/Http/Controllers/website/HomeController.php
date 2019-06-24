<?php

namespace App\Http\Controllers\website;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Catagory;
use App\Subcatagory;
use App\Banner;
class HomeController extends Controller
{

    public function index()
    {
        $daimond=Product::where('series_id',1)->orderBy('id','desc')->take(10)->get();
        $gold=Product::where('series_id',2)->orderBy('id','desc')->take(10)->get();
        $silver=Product::with("catagories")->where('series_id',3)->orderBy('id','desc')->take(10)->get();
        $slider=Slider::orderBy('id','desc')->get();
        //Getting Banners
        $summer=Banner::where('id',1)->first();
        $men=Banner::where('id',2)->first();
        $women=Banner::where('id',3)->first();
        $winter=Banner::where('id',4)->first();
//        dd($summer);
        return view("website.home",['daimond'=> $daimond, 'gold'=>$gold, 'silver'=>$silver, 'slider'=>$slider, 'summer'=>$summer,'men'=>$men,'women'=>$women,'winter'=>$winter]);
    }

    public function singleProduct($catagory,$subcatagory,$slug){
        $product=Product::with("catagories")->where("product-slug",$slug)->first();
        //dd($product->catagories->catagory_name);
        return view("website.product.index",['product'=>$product]);

    }
    public function menWinter(){

    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


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

    public function destroy($id)
    {
        //
    }

    public function showProduct($slug){
        $single=Product::where('product-slug',$slug)->first();

    }
}
