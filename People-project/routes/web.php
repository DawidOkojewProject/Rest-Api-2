<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\people_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('okojew/53639/show/', [people_Controller::class, 'all']);
Route::get('okojew/53639/show/{id}', [people_Controller::class, 'index']);
Route::put('okojew/53639/update/{id}', [people_Controller::class, 'update']);
Route::post('okojew/53639/create', [people_Controller::class, 'create']);
Route::delete('okojew/53639/delete/{id}', [people_Controller::class, 'delete']);
