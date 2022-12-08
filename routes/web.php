<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name("homepage");

Route::prefix("nftx")->group(function () {
    Route::get("/", [LandingController::class, 'home'])
        ->name("home");
    Route::get("/feature", [LandingController::class, 'feature'])
        ->name("feature");
    Route::get("/whotowork", [LandingController::class, 'whotowork'])
        ->name("whotowork");
    Route::get("/pricing", [LandingController::class, 'pricing'])
        ->name("pricing");
    Route::get("/reviews", [LandingController::class, 'reviews'])
        ->name("reviews");
});
// -------------------------------
Route::prefix("user")->group(function () {
    Route::get("/list", [UserController::class, "index"])->name("user.list");
    Route::get("/detail/{id}", [UserController::class, "detail"])->name("user.detail");
    Route::get("/store", [UserController::class, "store"])->name("user.store");

    Route::post("/create", [UserController::class, "create"])->name("user.create");
    Route::put("/update/{id}", [UserController::class, "update"])->name("user.update");
    Route::get("/destroy/{id}", [UserController::class, "destroy"])->name("user.destroy");
});
Route::prefix("sekolah")->group(function () {
    Route::get("/list", [SekolahController::class, "index"])->name("sekolah.list");
    Route::get("/detail/{id}", [SekolahController::class, "detail"])->name("sekolah.detail");
    Route::get("/store", [SekolahController::class, "store"])->name("sekolah.store");

    Route::post("/create", [SekolahController::class, "create"])->name("sekolah.create");
    Route::put("/update/{id}", [SekolahController::class, "update"])->name("sekolah.update");
    Route::get("/destroy/{id}", [SekolahController::class, "destroy"])->name("sekolah.destroy");
});
// -------------------------------
Route::prefix("v1")->group(function () {
    Route::get("/landing", [LandingController::class, 'landing'])
        ->name("landing");
});
//--------------------------------
// Route::get("/landing", [LandingController::class, 'landing'])
//     ->prefix("v1")
//     ->name("landing");
//--------------------------------
// Route::get("/landing", function () {
//     return view('slicing');
// });
//--------------------------------