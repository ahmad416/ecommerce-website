<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function products(){
        return $this->hasMany("App\Product","series_id","id");
    }
}
