<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
class BannerController extends Controller
{
    public function index(){
        $banners=Banner::all();
        return view("auth.banners.index",['banners'=>$banners]);
    }
    public function show($id){
        $banners=Banner::where('id',$id)->first();
        return view("auth.banners.edit",['banners'=>$banners]);
    }
    public function update(Request $request,$id){
        $request->validate([
            'banner-name' => "required",
            "tag-line" => "required",
            "banner-image" => "required|image"
        ],
            [
                "banner-name.required"=> "Name is required",
                "tag-line.required"=>"Tag line is required",
                "banner-image.required"=>"Banner image is required",
                "banner-image.image"=>"File must be an image"
            ]);
        $banner=Banner::find($id);
        $image=$banner["banner_image"];
        $imgpath=public_path()."/images/website/banners/".$image;
        if(file_exists($imgpath))
        unlink($imgpath);
        //Image Handling
        $originalImage=$request->file("banner-image");
        $extension=$originalImage->getClientOriginalExtension();
        $fileName=time().".".$extension;
        $originalImage->move(public_path()."/images/website/banners/",$fileName);
        //Updating Database
        $banner["name"]=$request["banner-name"];
        $banner["tag_line"]=$request["tag-line"];
        $banner["banner_image"]=$fileName;
        $banner->save();
        Alert::toast('Banner has been successfully updated', 'success', 'top-right');
        return redirect()->route("getBanner");
    }
}
