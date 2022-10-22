<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ZoneController;
use App\Http\Controllers\Admin\ApartController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* Categorias routes ---------*/
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

Route::resource('locations', LocationController::class)->names('admin.locations');

Route::resource('zones', ZoneController::class)->names('admin.zones');

Route::resource('homes', ApartController::class)->names('admin.homes');
