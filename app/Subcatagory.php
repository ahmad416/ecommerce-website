<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcatagory extends Model
{
    public function products(){
        return $this->hasMany("App\Product","subcatagory_id","id");
    }
}
