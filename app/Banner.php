<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['name','tag_line','banner_image'];
    protected $table='banners';
}
