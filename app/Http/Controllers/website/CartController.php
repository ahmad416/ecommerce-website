<?php

namespace App\Http\Controllers\Website;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Product;

class CartController extends Controller
{

    public function index()
    {
        $cart= Cart::content();
        return view("website.cart.index",['cart'=>$cart]);
    }
    //Add Single Product Without Quantity
    public function addProduct($id){
        $pro= Product::find($id);
        if($pro["sale-price"] === NULL){
            $price=$pro["product-price"];
        }else{
            $price=$pro["sale-price"];
        }
        Cart::add(['id'=>$pro['id'],'name'=>$pro['product-name'],'qty'=>1, 'price'=>$price, 'options'=> ['image'=>$pro['product-image']]]);
        flashy()->success('Product has been successfully added to cart');
        return redirect()->back();
    }
    //Add Product With Quantity
    public function addProducts(Request $request){
        $id=$request["product"];
        $quantity=$request["quantity"];
        $pro=Product::find($id);
        if($pro["sale-price"] === NULL){
            $price=$pro["product-price"];
        }else{
            $price=$pro["sale-price"];
        }
        Cart::add(['id'=>$pro["id"],'name'=>$pro["product-name"], 'qty'=>$quantity, 'price'=>$price, 'options'=>['image'=>$pro['product-image']]]);
        flashy()->success("Product has been successfully add to cart");
        return redirect()->back();
    }

    public function UpdateCart(Request $request,$id){
        $qty=$request["quantity"];
        $rowId=$request["rowid"];
        Cart::update($rowId,$qty);
        flashy()->success("Cart has been successfully updated");
        return redirect()->back();
    }


    public function create()
    {

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


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
         Cart::remove($id);
        flashy()->success('Product has been successfully removed from the cart');
        return redirect()->back();
    }
}
