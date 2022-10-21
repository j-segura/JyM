<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* Categorias routes ---------*/
/* Route::resource('categorias', CategoriaController::class)->names('admin.categorias'); */
