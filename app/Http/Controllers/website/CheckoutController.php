<?php

namespace App\Http\Controllers\Website;

use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Order;

class CheckoutController extends Controller
{
    public function index(){
        if(Cart::count() === 0){
            return redirect()->route("main");
        }else{
            $cart=Cart::content();
            //dd($cart);
            return view("website.checkout.index",["cart"=>$cart]);
        }
    }
    public function store(Request $request){
        $request->validate(
            [
            "billing_name" => "required|min:3",
            "billing_phone" => "required|numeric",
            "billing_city"  => "required|alpha",
            "order_address" => "required",
            "terms" => "required"
        ],
            [
                "billing_name.required" => "Your name is required",
                "billing_phone.required" => "Phone no is required",
                "billing_phine.numeric" => "Phone No only contains numbers",
                "terms.required" => 'Please Accept Terms & Condition to place order'
            ]);
        //dd($request->all());
        $orderNumber=rand(1000,9999);
        $this->addOrderTable($request,$orderNumber);
        $this->decreaseQuantity();
        Cart::destroy();
        return redirect(route("received",$orderNumber));

    }
    protected function addOrderTable($request,$orderNo){
        $order=Order::create([
            "name"=>$request["billing_name"],
            "email"=>$request["billing_email"],
            "phone"=>$request["billing_phone"],
            "city"=>$request["billing_city"],
            "shipping_address"=>$request["order_address"],
            "order_notes" => $request["order_comments"],
            "order_no"=>$orderNo,
            "billing_total"=>Cart::subtotal()
        ]);

        foreach (Cart::content() as $item){
            OrderProduct::create([
                "order_id"=>$order->id,
                "product_id"=>$item->id,
                "quantity" => $item->qty,
                "price"=>$item->price
            ]);
        }
        return $order;
    }
    protected function decreaseQuantity(){
        foreach (Cart::content() as $item){
            $product=Product::find($item->id);
            $product->update(["product-quantity"=>$product["product-quantity"] - $item->qty]);
        }
    }
    public function received($orderNo){
        return view("website.confirm.index",["receive"=>$orderNo]);
    }

}
