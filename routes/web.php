<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("homepage/{name}/{age}",function($name,$age){
    $students  = [
        "bhabihs",
        "aseem",
        "lochan",
        "bishal"
    ];
    return view("homepage")->with([
        "name" => "$name",
        "age" => $age,
        "students" => $students,
        "button" => "<button>$name</button>"
    ]);

});

Route::get("ecommerce/search/{productName?}",function($productName=null){
    return  "Your Product Name is: ". $productName ;
});


Route::get("routing/{name}",function($name){
    //return view("routingexample",compact("name"));
    return view("routingexample")->with([
        "hello123" => $name
    ]);
});

Route::get('/', function () {
    return view('welcome');
})->middleware(["custom.middleware"]);

Route::get("tutor/index",[TutorController::class,"index"]);
Route::get("tutor/search/{searchString}",[TutorController::class,"search"]);
Route::get("tutor/edit/{searchString}",[TutorController::class,"edit"]);

Route::get("form/index",[FormController::class,"index"])->name("form.index");
Route::post("form/store",[ FormController::class,"store"])->name("form.store");

Route::get("get/list",[FormController::class,"getList"])->name("get.list");
Route::get("delete/data/{id}",[FormController::class,"deleteData"])->name("delete.data");
Route::get("edit/{id}",[FormController::class,"edit"])->name("edit.data");
Route::post("update/{id}",[FormController::class,"update"])->name("update.data");

Route::get("locale/{lang?}",function($lang=null){
    App::setLocale($lang); // for making localization dynamic
    return view("localization");
})->name("locale");

Route::get("localeinfo/{lang?}",function($lang=null ){
    App::setLocale($lang); // for making localization dynamic
    return view("localeinfo");
})->name("set.locale");