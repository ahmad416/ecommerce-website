<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Catagory;
use App\Subcatagory;
use App\Serie;
use App\Variety;
use App\Product;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $product=Product::orderBy('id','desc')->get();
        return view("auth.products.all",['product'=>$product]);
    }


    public function create()
    {
        $a=Catagory::all();
        $b=Subcatagory::all();
        $c=Serie::all();
        $d=Variety::all();
        return view("auth.products.add",['catagory'=> $a, 'subcatagory'=> $b, 'series'=> $c, 'variety'=> $d]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate(
            [
                "product-name"=> "required|min:3",
                "product-code"=> "required|min:3",
                "product-color"=> "required",
                "product-price"=> "required",
                "product-quantity"=> "required",
                "small-desc" => "required",
                "large-desc" => "required",
                "product-image" => "required|image|dimensions:width=4000, height=4000",
                "product-catagory" =>"required",
                "product-subcatagory"=>"required",
                "product-series"=>"required",
                "product-variety"=>'required',


            ],
            [
                "product-name.required"=>"Prodcut name is required.",
                "product-name.min"=> "Product name must be at least 3 character.",

                "product-code.required"=> "Product code is required.",

                "product-image.image"=>"The file must be an image.",
                "product-image.dimensions"=>"Image should be 1000pixel x 1000pixel"
            ]
        );

        $originalImage=$request->file("product-image");
        $extension=$originalImage->getClientOriginalExtension();
        $fileName=time().".".$extension;
        $originalImage->move(public_path()."/images/product/",$fileName);

        $product=new Product;
        $product["product-name"]=$request["product-name"];
        $product["product-code"]=$request["product-code"];
        $product["small-desc"]=$request["small-desc"];
        $product["product-price"]=$request["product-price"];
        $product["full-desc"]=$request["large-desc"];
        $product["product-quantity"]=$request["product-quantity"];
        $product["product-image"]=$fileName;
        $product["color"]=$request["product-color"];
        $product["sale-price"]=$request["sale-price"];
        $product["catagory_id"]=$request['product-catagory'];
        $product["subcatagory_id"]=$request["product-subcatagory"];
        $product["series_id"]=$request["product-series"];
        $product["variety_id"]=$request['product-variety'];
        $product->save();


        Alert::toast('Product has been successfully added', 'success', 'top-right');

        return redirect(route("addProduct"));
    }

    public function show($id)
    {
        $single=Product::where("id",$id)->with("catagories")->with("subcatagory")->with("series")->with("varieties")->first();
        return response()->json($single);
    }


    public function edit($id)
    {
        $a=Product::where("id",$id)->first();
        return view("auth.products.edit",["sinagle"=>$a]);
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                "product-name"=> "required|min:3",
                "product-code"=> "required|min:3",
                "product-color"=> "required",
                "product-price"=> "required",
                "product-quantity"=> "required",
                "small-desc" => "required",
                "large-desc" => "required",


            ],
            [
                "product-name.required"=>"Prodcut name is required.",
                "product-name.min"=> "Product name must be at least 3 character.",

                "product-code.required"=> "Product code is required.",
            ]
        );
        $pro=Product::find($id);
        $pro["product-name"]=$request["product-name"];
        $pro["product-code"]=$request["product-code"];
        $pro["color"]=$request["product-color"];
        $pro["product-quantity"]=$request["product-quantity"];
        $pro["product-price"]=$request["product-price"];
        $pro["sale-price"]=$request["sale-price"];
        $pro["small-desc"]=$request["small-desc"];
        $pro["full-desc"]=$request["large-desc"];
        $pro->save();


        Alert::toast('Product has been successfully updated', 'success', 'top-right');

        return redirect()->back();
    }


    public function destroy($id)
    {
        $delet=Product::find($id);
        $delet->delete();
        flashy()->error('Product has been deleted successfully');
        return redirect(route("viewProduct"));
    }
    public function outofstock(){
        $outofStock=Product::where("product-quantity","<=","0")->get();
        return view("auth.products.outStock",["outofstock"=>$outofStock]);
    }
}
