<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ListModelController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('resource', ResourceController::class);
Route::resource('list', ListModelController::class);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // redirect after logout
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('list', ListModelController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])
        ->name('admin.users');

Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])
    ->name('admin.users.destroy')
    ->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/resources', [App\Http\Controllers\ResourceController::class, 'index'])
        ->name('admin.resources');
        });

require __DIR__.'/auth.php';
