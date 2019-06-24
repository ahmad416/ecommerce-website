<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
    public function product($slug){
        $single=Product::where("product-slug",$slug)->first();
        $a=$single["catagory_id"];
        $related=Product::where("catagory_id",$a)->orderBy("id","desc")->get();
        return view("website.singleProduct.index",["single"=>$single, "related"=>$related]);
    }
    public function menWinter(){
        $a=Product::where("catagory_id",2)->where("subcatagory_id",1)->orderBy("id","desc")->get();
        return view("website.product.winterMen",["b"=>$a]);
    }
    public function womenWinter(){
        $c=Product::where("catagory_id",2)->where("subcatagory_id",2)->orderBy("id","desc")->get();
        return view("website.product.winterWomen",["d"=>$c]);
    }
    public function kurtaWinter(){
        $e=Product::where("catagory_id",2)->where("variety_id",2)->orderBy("id","desc")->get();
        return view("website.product.winterKurta",["f"=>$e]);
    }
    public function menSummer(){
        $g=Product::where("catagory_id",1)->where("subcatagory_id",1)->orderBy("id","desc")->get();
        return view("website.product.summerMen",["h"=>$g]);
    }
    public function womenSummer(){
        $h=Product::where("catagory_id",1)->where("subcatagory_id",2)->orderBy("id","desc")->get();
        return view("website.product.summerWomen",["i"=>$h]);
    }
    public function kurtaSummer(){
        $j=Product::where("catagory_id",1)->where("variety_id",2)->orderBy("id","desc")->get();
        return view("website.product.summerKurta",["k"=>$j]);
    }
    public function sale(){
        $sale=Product::where("sale-price",'!=', NULL)->orderBy("id","desc")->get();
        return view("website.sale.sale",["sale"=>$sale]);
    }
    public function summerSingle(){
        $sale=Product::where("catagory_id",1)->orderBy("id","desc")->get();
        return view("website.single.summer",["sale"=>$sale]);
    }
    public function winterSingle(){
        $sale=Product::where("catagory_id",2)->orderBy("id","desc")->get();
        return view("website.single.winter",["sale"=>$sale]);

    }
    public function menSingle(){
        $sale=Product::where("subcatagory_id",1)->orderBy("id","desc")->get();
        return view("website.single.men",["sale"=>$sale]);

    }
    public function womenSingle(){
        $sale=Product::where("subcatagory_id",2)->orderBy("id","desc")->get();
        return view("website.single.women",["sale"=>$sale]);

    }

}
