<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FileUpload;

class FileUploadController extends Controller
{
    public function index(Request $request){
        //dd($request->all());  works fine if request is made
        $images = FileUpload::all();
        return view("upload-file")->with([
            "images" => $images
        ]);
    }

    public function upload(Request $request){
        //dd($request->all());
        $request->validate([
            "image" => "required|mimes:jpg,jpeg,png"
        ],[
            "image" => "Image must be of valid type png, jpeg, jpg"
        ]);

        //default upload
        $file_name = $request->file("image")->store("uploads/new/","public"); // generates random string for filename
        
        // assiging custom name to uploaded file

        /*        
            $date = date("Y_m_d_H_i_s");
            $name = "img_".$date; // custom name
            $extension = $request->file('image')->getClientOriginalExtension(); // original extension
            //formatting into the name.extension
            //$file_name = $name.".".$extension;
            $file_name = "{$name}.{$extension}";
            
            $request->file("image")->storeAs("public/uploads", $file_name );
        */
        
        
        FileUpload::create([
            "file_name" => $file_name,
        ]);
        
        

        
/*
        music.mp3
        veido.mp4
        image.jpg */

        return back();
    }
}
