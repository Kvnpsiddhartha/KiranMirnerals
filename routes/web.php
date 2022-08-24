<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;

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


Route::get('/', [IndexController::class,'index']);
// Route::get('/', function () {
//     return view('index');
// });
Route::get('about',function(){
    return view("about",['services'=>Service::all()]);
});
Route::get('clientele',function(){
    return view('clientele');
});

Route::get('quality-control',function(){
    return view('quality');
});
Route::get('infrastructure',function(){
    return view('infrastructure');
});
Route::get('mining',function(){
    return view('mining');
});
Route::get('packaging',function(){
    return view('packaging');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('service',function(){
    return view('service',['services' => Service::all()]);
});
Route::get('product/{slug}', [ServiceController::class, 'show']);

