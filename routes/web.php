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



Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
      Route::resource('keyword', 'KeywordsController', ['only' => ['index','store','destroy']]);
      Route::get('keywordsnews','KeywordnewsController@index')->name('keywordsnews.index');
      Route::get('favoritenews','FavoritenewsController@index')->name('favoritenews.index');
      
Route::group(['prefix' => 'articles/{id}'], function () {
        Route::post('favorite', 'FavoritenewsController@favoritestore')->name('favorites.favorite');
        Route::delete('unfavorite', 'FavoritenewsController@favoritedestroy')->name('favorites.unfavorite');
        Route::post('pin','FavoritenewsController@pinstore')->name('pin.pin');
        Route::delete('unpin','FavoritenewsController@pindestroy')->name('pin.unpin');
      });
    
});





Route::get('/','AllnewsController@index')->name('allnews.index');
Route::get('description', function () {
    return view('news.news_description');
})->name('news.description');





Route::get('sample/a/b', function () {
    return view('sample');
});


