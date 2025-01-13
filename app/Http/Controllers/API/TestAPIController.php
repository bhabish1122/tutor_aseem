<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\ApiTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestAPIController extends Controller
{
    public function index(){
        return response()->json([
            "name" => "Bhabish" 
        ]);
    }

    public function store(Request $request){
        try{
            //throw new Exception("This is test exception");
            $data = ApiTest::create([
                "name" => $request->name,
                "contact" => $request->contact,
            ]);
            return response()->json([
                "message" => "Created successfully",
                "data" => $data
            ],200);
        }catch(Exception $e){
            return response()->json([
                "message_err" =>  $e->getMessage()
            ],500);
        }
    }

    public function getAll(){
        $data = ApiTest::get();
        return response()->json([
            "data" => $data
        ]);
    }
}
