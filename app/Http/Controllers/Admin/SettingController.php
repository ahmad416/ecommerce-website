<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function logo(){
        return view("auth1.setting.logos");
    }
}
