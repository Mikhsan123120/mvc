<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[productcontroller::class,'index']);
route::get('/product/{id}',[productcontroller::class,'show']);