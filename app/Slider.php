<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=['bg-img'];
    protected $table='sliders';
}
