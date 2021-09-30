<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin'],'as'=>'admin.'], function()
{
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['prefix'=>'agent','namespace'=>'Agent','middleware'=>['auth','agent'],'as'=>'agent.'], function()
{
    Route::get('dashboard',[App\Http\Controllers\Agent\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['prefix'=>'seeker','namespace'=>'Seeker','middleware'=>['auth','seeker'],'as'=>'seeker.'], function()
{
    Route::get('dashboard',[App\Http\Controllers\Seeker\DashboardController::class, 'index'])->name('dashboard');
});
