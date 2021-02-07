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

Route::post('/verifyPlaySotreApp','VerifyGoogleAppController@index');
Route::post('/verifyAppleSotreApp','VerifyiOSAppController@index');
Route::post('/verifyAppleSotreSubscription','VerifyiOSAppController@verifyrecord');
Route::post('/verifyPlaySotreSubscription','VerifyGoogleAppController@verifyrecord');
Route::post('/verifyPlaySotreSubscription','VerifyGoogleAppController@verifyrecord');
Route::post('/callback','CallBackSystemController@index');