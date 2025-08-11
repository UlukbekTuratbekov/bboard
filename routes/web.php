<?php

use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/', [BbsController::class, 'index'])->name('index');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/add', [HomeController::class, 'showAddBbForm'])->name('bb.add');
Route::post('/home', [HomeController::class, 'storeBb'])->name('bb.store');
Route::get('/home/{bb}/edit', [HomeController::class, 'showEditBbForm'])->name('bb.edit');
Route::patch('/home/{bb}', [HomeController::class, 'updateBb'])->name('bb.update');
Route::get('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete');
Route::delete('/home/{bb}', [HomeController::class, 'destroyBb'])->name('bb.destroy');

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

