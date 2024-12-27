<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


        dd($name,$address,$email);
    }
}
