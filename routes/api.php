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

Route::post('registerDevice','RegistrationController@create');

Route::middleware('customauth:api')->post('purchaseSubscription','SubscriptionController@create');
Route::middleware('customauth:api')->get('subscriptionworker','WorkerController@index');
Route::middleware('customauth:api')->post('/verifyPlaySotreApp','VerifyGoogleAppController@index');
Route::middleware('customauth:api')->post('/verifyAppleSotreApp','VerifyiOSAppController@index');
Route::middleware('customauth:api')->post('/verifyAppleSotreSubscription','VerifyiOSAppController@verifyrecord');
Route::middleware('customauth:api')->post('/verifyPlaySotreSubscription','VerifyGoogleAppController@verifyrecord');
Route::middleware('customauth:api')->post('/verifyPlaySotreSubscription','VerifyGoogleAppController@verifyrecord');
Route::middleware('customauth:api')->post('/callback','CallBackSystemController@index');
