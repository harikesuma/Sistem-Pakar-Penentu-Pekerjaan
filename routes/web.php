<?php



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
});

Route::get('/pertanyaan', function(){
    return view('pertanyaan');
})->name('pertanyaan');

Route::get('jawaban', function () {
    return null;
})->name('jawaban');

Route::get('hasil', function(){
    return view('hasil');
})->name('hasil');
