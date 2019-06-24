<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="orders";
    protected $fillable=["name","email","phone","city","shipping_address",
        "order_notes","billing_total","order_no"];

    public function products(){
        return $this->belongsToMany("App\Product")->withPivot("quantity","price");
    }
}
