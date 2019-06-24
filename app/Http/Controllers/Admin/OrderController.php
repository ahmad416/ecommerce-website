<?php

namespace App\Http\Controllers\Admin;
use PDF;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        return $this->middleware("auth");
    }

    public function order($id){
        $order=Order::where("id",$id)->first();
        return view("auth.singleOrder.index",["singleOrder"=>$order]);
    }
    public function invoice($id){
        $singleOrder=Order::where("id",$id)->first();
        $pdf=PDF::loadView("auth.invoice.index1",['singleOrder'=>$singleOrder]);
        return $pdf->stream("download.pdf");
//        return view("auth.invoice.index");
    }

    public function new(){
        $newOrders=Order::where("status","0")->get();
        return view("auth.orders.indexnew",["newOrders"=>$newOrders]);
    }
    public function dispatchOrder(){
        $newOrders=Order::where("status","1")->get();
        return view("auth.orders.dispatch",["newOrders"=>$newOrders]);
    }
    public function completed(){
        $newOrders=Order::where("status","2")->get();
        return view("auth.orders.complete",["newOrders"=>$newOrders]);
    }
    public function all(){
        $newOrders=Order::orderBy("updated_at","desc")->get();
        return view("auth.orders.all",["newOrders"=>$newOrders]);
    }
    public function dis($id){
        $orderId=Order::find($id);
        $orderId->status=1;
        $orderId->save();
        Alert::toast('Order status changed to dsipatched successfully', 'success', 'top-right');
        return redirect()->back();
    }
    public function com($id){
        $orderId=Order::find($id);
        $orderId->status=2;
        $orderId->save();
        Alert::toast('Order status changed to completed successfully', 'success', 'top-right');
        return redirect()->back();
    }


}
