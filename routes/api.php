<?php

use App\Http\Controllers\Backend\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/pengguna", [PenggunaController::class, "index"]);
Route::get("/pengguna/{id}", [PenggunaController::class, "show"]);
Route::post("/pengguna", [PenggunaController::class, "store"]);
Route::post("/pengguna/{id}/edit", [PenggunaController::class, "update"]);
Route::post("/pengguna/{id}/delete", [PenggunaController::class, "destroy"]);
