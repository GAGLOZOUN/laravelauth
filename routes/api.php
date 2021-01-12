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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::middleware('auth:api')->group(function(){
	//Route::apiResource('article', 'ArticleController');

//}) ; 
Route::group([

    'middleware' => 'auth:sanctum',
    'prefix' => 'auth'

], function ($router) {  
	       Route::post('register', 'UserController@register');
           Route::post('login',"UserController@index");
           Route::apiResource('article', 'ArticleController');
});