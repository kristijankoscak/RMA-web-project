<?php

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); */

/* Route::get('/user', function (Request $request) {
    if($request->username){
        echo $request->username;
    }
    echo "smh";
}); */

Route::post('/user-login', 'Auth\LoginController@apiAuthenticate');
Route::post('/user-register', 'Auth\RegisterController@apiRegister');
Route::get('/list-products','ProductsController@list');
Route::get('/list-products/{county}/{type}','ProductsController@filterList');
Route::get('/list-comments','CommentsController@list');