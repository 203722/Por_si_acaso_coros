<?php
use App\Http\Controllers\contratacionesController;

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
    return view('agregar');
});
Route::get('/contratacion', 'App\Http\Controllers\contratacionesController@index');
Route::get('/contratacion/{id}', 'App\Http\Controllers\contratacionesController@user');
Route::post('/store', [contratacionesController::class, 'store'])->name('contrataciones.store');
Route::get('/user/{id}', [contratacionesController::class, 'user'])->name('contrataciones.user');
