<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WishController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "home"])->name("home");

Route::get("/wish", [WishController::class, "wish"])->name("wish");

Route::post("/wish", [WishController::class, "store"]);

Route::get("/messages", [WishController::class, "messages"])->name("messages");

// Route::get("/messages", [WishController::class, "getData"]);

