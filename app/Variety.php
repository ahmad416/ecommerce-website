<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    public function products(){
        return $this->hasMany("App\Product","variety_id","id");
    }
}
