<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Lib\Lib32Controller;
use App\Http\Controllers\Admin\Lib\Lib64Controller;
use App\Http\Controllers\Admin\ManageLoaderController;
use App\Http\Controllers\Admin\ManageProfile;
use App\Http\Controllers\Admin\PushPlugin32Update;
use App\Http\Controllers\Admin\PushPlugin64Update;
use App\Http\Controllers\Admin\SafetyStatusController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/admin', [DashboardController::class, 'dashboardIndex'])->name('admin.dashboard')->middleware(['auth', 'whoAreYou']);


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'whoAreYou']], function() {
    Route::get('/dashboard', [DashboardController::class, 'dashboardIndex'])->name('dashboard');

    //ManageLoader
    Route::controller(ManageLoaderController::class)->group(function() {
        Route::get('/manage-loader', 'manageLoaderIndex')->name('manageLoader');
        //PushNewLoaderUpdate
        Route::get('/manage-loader/{manageLoaderModel}/push-loader-update', 'pushLoaderUpdate');
        //PUT update into sql
        Route::put('/manage-loader/{manageLoaderModel}', 'push');
    });

    /**TODO: Plugin update part...**/
    //ManagePlugin32
    Route::controller(PushPlugin32Update::class)->group(function() {
        Route::get('/push-plugin-update', 'pushPluginIndex');
        //PushNewPlugin32Bit
        Route::get('/push-plugin-update/{modelPlugin32}/push-32bit-plugin', 'push32BitPluginUpdate');
        //PUT update plugin32 into sql
        Route::put('/push-plugin-update/{modelPlugin32}', 'push32bitPlugin');
    });

    //ManagePlugin64
    Route::controller(PushPlugin64Update::class)->group(function() {
        Route::get('/push-plugin64-update', 'pushPlugin64Index');
        //PushNewPlugin64Bit
        Route::get('/push-plugin64-update/{modelPlugin64}/push-64bit-plugin', 'push64BitPluginUpdate');
        //PUT update plugin64 into sql
        Route::put('/push-plugin64-update/{modelPlugin64}', 'push64bitPlugin');
    });

    /**TODO: Lib update part...**/
    //Manage32BitLibUpdate
    Route::controller(Lib32Controller::class)->group(function() {
        Route::get('/push-lib32-update', 'lib32Index');
        //PushNewLibRoutes
        Route::get('/push-lib32-update/{lib32Model}/push-lib', 'push32bitLib');
        //Save into SQl
        Route::put('/push-lib32-update/{lib32Model}', 'pushLib32BitToSQL');
    });

    //Manage64BitLibUpdate
    Route::controller(Lib64Controller::class)->group(function() {
        Route::get('/push-lib64-update', 'lib64Index');
        //PushNewLibRoutes
        Route::get('/push-lib64-update/{lib64Model}/push-lib', 'push64bitLib');
        //Save into SQL
        Route::put('/push-lib64-update/{lib64Model}', 'pushLib64BitToSQL');
    });

    //Safety-Status
    Route::controller(SafetyStatusController::class)->group(function() {
        Route::get('/safety-status', 'safetyIndex');
        //Edit status
        Route::get('/safety-status/{statusModel}/edit', 'editStatus');
        //Update into SQL
        Route::put('/safety-status/{statusModel}', 'updateStatus');
    });

    //Admin-Profile
    Route::controller(ManageProfile::class)->group(function() {
        Route::get('/manage-admin-profile', 'manageMyProfile');
        //Update
        Route::put('/manage-admin-profile', 'updateProfile');
    });
});
