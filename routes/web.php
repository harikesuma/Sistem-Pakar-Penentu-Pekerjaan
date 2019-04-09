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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'karakteristik'], function () {
    Route::get('', 'KarakteristikController@index')->name('karakteristik.index');
    Route::post('', 'KarakteristikController@store')->name('karakteristik.store');
    Route::get('detail/{karakteristik}', 'KarakteristikController@show')->name('karakteristik.show');
    Route::post('update/{karakteristik}', 'KarakteristikController@update')->name('karakteristik.update');
});


Route::group(['prefix' => 'pekerjaan'], function () {
    Route::get('', 'PekerjaanController@index')->name('pekerjaan.index');
    Route::get('/create', 'PekerjaanController@create')->name('pekerjaan.create');
    Route::post('/create', 'PekerjaanController@store')->name('pekerjaan.store');
    Route::get('detail/{pekerjaan}', 'PekerjaanController@show')->name('pekerjaan.showDet');
    Route::post('update/{pekerjaan}', 'PekerjaanController@update')->name('pekerjaan.update');
    Route::delete('/{pekerjaan}', 'PekerjaanController@destroy')->name('pekerjaan.delete');
    Route::post('/detail/karakteristik/{pekerjaan}', 'PekerjaanController@tambahKarakteristik')->name('pekerjaan.karakteristik');
    Route::get('detail/karakteristik/{pekerjaan}', 'PekerjaanController@generateLabel')->name('pekerjaan.generate');
    Route::get('hapus/karakteristik/{pekerjaan}/{id}','PekerjaanController@hapusKarakter')->name('pekerjaan.hapusKarakter');
        
    // Route::get('create/label', 'PekerjaanController@showKarakteristikForm')->name('pekerjaan.karakteristik');
    // Route::get('/label','PekerjaanController@forLabel')->name('pekerjaan.label');
});

Route::resource('topics', 'TopicController');
Route::group(['prefix' => 'recomendation'], function () {
    //Route::get('topic','RecomendationController@topic')->name('recomendation.topic');
    Route::get('/','RecomendationController@index')->name('recomendation.index');
    Route::post('yes','RecomendationController@yesAnswer')->name('recomendation.yes');
    Route::post('no','RecomendationController@noAnswer')->name('recomendation.no');
});
Route::get('done','RecomendationController@done');

