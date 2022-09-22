<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RoleController;

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
    return view('home');
});


//PLAYERS
Route::prefix('players')->name('players.')->group(function () {

        Route::get('index', [PlayerController::class, 'index'])->name('index');
        Route::get('player/{id}', [PlayerController::class, 'show'])->name('show');
        Route::get('create', [PlayerController::class, 'create'])->name('create');
        Route::post('store', [PlayerController::class, 'store'])->name('store');
        Route::delete('destroy/{player}', [PlayerController::class, 'destroy'])->name('destroy');
        Route::get('edit/{player}', [PlayerController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [PlayerController::class, 'update'])->name('update');
        Route::get('get-roles/{id}', [PlayerController::class, 'getRole'])->name('getRole');
});


//TEAMS
Route::prefix('teams')->name('teams.')->group(function () {

        Route::get('index', [TeamController::class, 'index'])->name('index');
        Route::get('team/{id}', [TeamController::class, 'show'])->name('show');
        Route::get('create', [TeamController::class, 'create'])->name('create');
        Route::post('store', [TeamController::class, 'store'])->name('store');
        Route::get('edit/{team}', [TeamController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [TeamController::class, 'update'])->name('update');
        Route::delete('destroy/{team}', [TeamController::class, 'destroy'])->name('destroy');

});


//ROLE
Route::resource('roles', RoleController::class);
/* 
GET|HEAD        roles ......................................................................... roles.index › RoleController@index
POST            roles ......................................................................... roles.store › RoleController@store
GET|HEAD        roles/create ................................................................ roles.create › RoleController@create
GET|HEAD        roles/{role} .................................................................... roles.show › RoleController@show
PUT|PATCH       roles/{role} ................................................................ roles.update › RoleController@update  
DELETE          roles/{role} .............................................................. roles.destroy › RoleController@destroy  
GET|HEAD        roles/{role}/edit ............................................................... roles.edit › RoleController@edit  
*/ 


