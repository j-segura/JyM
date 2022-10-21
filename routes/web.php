<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('home/{home}', [IndexController::class, 'show'])->name('homes.show');
Route::get('categoria/{categoria}', [IndexController::class, 'categoria'])->name('homes.categoria');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
