<?php

use App\Http\Controllers\WelcomeController;
use App\Models\TotalVisit;
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

Route::get('/', [WelcomeController::class,'index'])->name('inicio');



Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::post('/downloadpdf',function (){
   return view('downloadpdf');
})->name('downloadpdf');;

Route::get('/docs',function (){

    return view('docs');
})->name('docs');

Route::get('/alldocube',function (){

    return view('/webstatic/alldocube');
})->name('alldocube');

Route::get('/aoc',function (){

    return view('/webstatic/aoc');
})->name('aoc');

Route::get('/lenovo',function (){

    return view('/webstatic/lenovo');
})->name('lenovo');

Route::get('/colabora',function (){

    return view('/webstatic/colabora');
})->name('colabora');
