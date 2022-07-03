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

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', App\Http\Controllers\UserController::class);
Route::post('user-restore', [App\Http\Controllers\UserController::class, 'restore'])->name('user-restore');

Route::resource('roles', App\Http\Controllers\RolController::class);
Route::resource('permisos', App\Http\Controllers\PermisoController::class);

Route::resource('audit', App\Http\Controllers\AuditController::class);
Route::resource('teams', App\Http\Controllers\TeamController::class);
Route::resource('nationalities', App\Http\Controllers\NationalityController::class);
Route::resource('pilots', App\Http\Controllers\PilotController::class);
Route::resource('races', App\Http\Controllers\RaceController::class);
Route::resource('circuits', App\Http\Controllers\CircuitController::class);
