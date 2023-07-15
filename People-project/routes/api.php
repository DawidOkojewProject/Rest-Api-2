<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\people_Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('okojew/53639/show/', [people_Controller::class, 'all']);
Route::get('okojew/53639/show/{id}', [people_Controller::class, 'index']);
Route::put('okojew/53639/update/{id}', [people_Controller::class, 'update']);
Route::post('okojew/53639/create', [people_Controller::class, 'create']);
Route::delete('okojew/53639/delete/{id}', [people_Controller::class, 'delete']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

