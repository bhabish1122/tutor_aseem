<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class FormController extends Controller
{
    public function index(){
        return view("form");
    }

    public function store(Request $request){

        $request->validate([
            "name"=> "required",
            "email" => "required|email",
            "address" => "required"
        ]);

        // dd($_REQUEST['name'],"kk"); // for concept
        // dd($request['name']);
        
        $name = $request->name;
        $address = $request->address;
        $email = $request->email;


        // dd($name,$address,$email); //for debugging

        $information  = new Information();
        $information->name = $name;
        $information->email = $email;
        $information->address = $address;
        $information->save();

        session()->flash("message","Data inserted Successfully"); // puts data for limited amount of time
        // session()->put("message","Data Inerted Successfuly");// for retaining data in session 

        return redirect()->back();
    }

    public function getList(){
        
        // return Information::select("id","name")->get(); // to exatract selected column only

        $data = Information::all();
        // return $data;
        return view("table",compact("data"));
    }

    public function deleteData($id){
        Information::where("id",$id)->delete();
        session()->flash("message","Data deleted successfully");
        return redirect()->back();
    }

    public function edit($id){
        $data = Information::where("id",$id)->first();
        return view('edit-form',compact("data"));
    }

    public function update(Request $request, $id){
        $information = Information::where("id",$id)->first();
        $information->name = $request->name;
        $information->email = $request->email;
        $information->address = $request->address;
        $information->save();

        return redirect()->route('get.list');
    }
}
