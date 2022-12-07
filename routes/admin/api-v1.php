<?php

use App\Http\Controllers\Admin\Lib\Lib32Controller;
use App\Http\Controllers\Admin\Lib\Lib64Controller;
use App\Http\Controllers\Admin\ManageLoaderController;
use App\Http\Controllers\Admin\PushPlugin32Update;
use App\Http\Controllers\Admin\PushPlugin64Update;
use App\Http\Controllers\Admin\SafetyStatusController;
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

//Fetch data Reset-API
Route::group(['prefix' => 'v1'], function() {
    //Loader
    Route::get('loaderData', [ManageLoaderController::class, 'fetchLoaderData']);
    Route::get('safety-status', [SafetyStatusController::class, 'fetchSafetyStatus']);

    //Plugin
    Route::get('plugin32Data', [PushPlugin32Update::class, 'fetchPlugin32Data']);
    Route::get('plugin64Data', [PushPlugin64Update::class, 'fetchPlugin64Data']);

    //Libs
    Route::get('lib32BitData', [Lib32Controller::class, 'fetchLib32Data']);
    Route::get('lib64BitData', [Lib64Controller::class, 'fetchLib64Data']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
