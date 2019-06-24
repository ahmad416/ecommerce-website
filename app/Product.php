<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cart;
class Product extends Model
{
    use Sluggable;
    protected $fillable=[
        "product-name","product-code","small-desc","product-price","full-desc","product-quantity","product-image","color","sale-price"
    ];

    public function sluggable(){
        return [
            'product-slug'=> [
                'source' => 'product-name'
            ]

        ];
    }

    protected $table="products";

    public function catagories(){
        return $this->belongsTo("App\Catagory",'catagory_id',"id");
    }
    public function subcatagory(){
        return $this->belongsTo("App\Subcatagory","subcatagory_id","id");
    }
    public function series(){
        return $this->belongsTo("App\Serie","series_id","id");
    }
    public function varieties(){
        return $this->belongsTo("App\Variety","variety_id","id");
    }
    public function orders(){
        return $this->belongsToMany("App\Order");
    }
}
