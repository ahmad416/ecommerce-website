<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index(){
        $slider=Slider::orderBy('id','desc')->get();
        return view("auth.slider.index",["slider"=>$slider]);
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'slider-img'=>"required|image|dimensions: width=1920, height=786"
        ],
            [
                'slider-img.required'=>'Slider Image is required',
                'slider-img.dimesnsions' => 'Slider image Dimensions should be 1920 X 786'
            ]);
        $originalImage=$request->file("slider-img");
        $extension=$originalImage->getClientOriginalExtension();
        $name=time();
        $filename=$name.'.'.$extension;
        $originalImage->move(public_path()."/images/website/sliders/",$filename);

        $slider=new Slider();
        $slider['bg-img']=$filename;
        $slider['title']=$name;
        $slider->save();

        Alert::toast('Slider has been successfully uploaded', 'success', 'top-right');

        return redirect()->back();

    }

    public function destroy($id){
        $delet=Slider::find($id);
        $img=$delet['bg-img'];
        Storage::delete('public/images/website/sliders/'.$img);
        $delet->delete();
        Alert::toast('Slider has been successfully deleted', 'success', 'top-right');
        return redirect()->back();

    }


}
