<?php

use Illuminate\Http\Request;
use App\Genre;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('genres', 'GenreController@index');

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('genres/{genre}', 'GenreController@show');
    Route::post('genres', 'GenreController@store');
    Route::put('genres/{genre}', 'GenreController@update');
    Route::delete('genres/{genre}', 'GenreController@delete');

});
