<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\taskController as post;
Route::get('/iti/home', function () {
    return view('home');
});
Route::get('/iti/about', function () {
    return view('about');
});
Route::get('/iti/contact', function () {
    return view('contactus');
});
// Route::get('/iti/track', function () {
// $name="mohamed";
//     $arr=[1,2,3,4,5,6,7];
//     return view('track',['name'=>$arr]);

// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('post',[post::class, 'show']);
Route::get('post/{title}',[post::class, 'show_post']);
Route::get('c',[post::class, 'create']);
Route::get("form",[post::class ,"dispayForm"]);
Route::post("insert",[post::class ,"store"])->name("post.insert");


