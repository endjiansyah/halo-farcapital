<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\WithAuth;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name("homepage")->middleware(['withAuth']);
Route::get('/', function () {
    return view('frontend.index');
})->name("index");

Route::get('/add', function () {
    return view('frontend.add');
})->name("add");

Route::get('/detail/{id}', function ($id) {
    return view('frontend.detail', ["id" => $id]);
})->name("detail");

// ---------------------

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
Route::prefix("user")
    ->name("user.")
    ->controller(UserController::class)
    ->group(function () {
        Route::get("/list", "index")->name("list");
        Route::get("/detail/{id}", "detail")->name("detail");
        Route::get("/store", "store")->name("store");

        Route::post("/create", "create")->name("create");
        Route::put("/update/{id}", "update")->name("update");
        Route::get("/destroy/{id}", "destroy")->name("destroy");
    });
// ---------------------------
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

Route::any("/upload", [LandingController::class, "upload"])->name("upload");
//--------------------------------

Route::any('/login', [AuthController::class, 'login'])->name('login')->middleware(['noAuth']);
Route::any('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(['withAuth']);
// Route::get("/landing", [LandingController::class, 'landing'])
//     ->prefix("v1")
//     ->name("landing");
//--------------------------------
// Route::get("/landing", function () {
//     return view('slicing');
// });
//--------------------------------