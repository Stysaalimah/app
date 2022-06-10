<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\friends;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\GroupsController;
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

Route ::get('','App\Http\Controllers\CobaController@index');
Route::resources([
    'friends' => CobaController::class,
    'groups' => GroupsController::class,
]);
Route ::get('/groups/addmember/{group}','App\Http\Controllers\GroupsController@addmember');
Route ::put('/groups/addmember/{group}','App\Http\Controllers\GroupsController@updateaddmember');
Route ::put('/groups/deleteaddmember/{group}','App\Http\Controllers\GroupsController@deleteaddmember');