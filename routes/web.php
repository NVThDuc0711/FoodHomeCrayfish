<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('product',[ProductController::class,'index']);
Route::get('product/{id}',[ProductController::class,'details']);
// Route::get('/', function () {
//     return view('Home');
// });
// Route::get('/product',function(){
//     return view('Product');
// });
// Route::get('/introduct',function(){
//     return view('Introduct');

// });
// Route::get('/contact',function(){
//     return view('Contact');

// });

