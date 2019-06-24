<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsController extends Controller
{
    public function returnPolicy(){
        return view("website.misc.terms");
    }
    public function freQuestions(){
        return view("website.misc.faqs");
    }
    public function aboutUs(){
        return view("website.misc.about");
    }
}
