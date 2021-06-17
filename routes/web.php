<?php
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AntecedentesController;
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
//Route::resource('/', [InicioController::class, 'inicio']);

Route::get('/', function () {
    return view('inicio');
});

Route::get('admin', function () {
    return  view('admin.dashboard');
});

Route::resource('Antecedentes', AntecedentesController::class);
