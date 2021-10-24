<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// This is base route
Route::get('/', function () {
    return view('welcome');
});

// 1st method to create route of a view
Route::get('/about', function() {
    return view('about');
});

// 2nd method to create route of a view
Route::view('/contact', 'contact');

// 3rd method to create route of a view
/*
Route::get('/{serviceName}', function($serviceName){
    return view('services',['serviceName' => $serviceName]);
});
*/

// 4th method to create route of a view
/*
Route::get('/{param}', function($param) {
    echo $param;
    return view('hello');
});
*/

// 1st method to create redirect
/*
Route::get('/about', function(){
    return redirect('contact');
});
*/

// 1st method to create controller
//Route::get("users",[Users::class, 'index']);

// 2nd method to create controller
Route::get("users/{user}",[Users::class, 'index']);
// Note: Through the above code we can't route to "/users".

// 5th method to create route of a view
Route::get("/admin/{name}", function($name) {
    return view("admin", ["admin" => $name]);
});
// Note: Through the above code we can't route to "/admin".