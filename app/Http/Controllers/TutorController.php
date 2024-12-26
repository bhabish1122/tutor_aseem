<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index(){
        //return "You're Here";
        return view("tutor");
    }

    public function search($searchString){
        //return "You're Here";

        return view("tutor",compact("searchString"));
    }
}
