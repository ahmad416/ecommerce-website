<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackOrderController extends Controller
{
    public function index(){
        return view("website.orderTracking.index");
    }
}
