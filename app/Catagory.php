<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function products(){
        return $this->hasMany('App\Product','catagory_id', "id");
    }
}
