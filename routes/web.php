<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ApproachComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\WhatweComponent;
use App\Http\Livewire\WhoweComponent;
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

Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/about', AboutComponent::class)->name('about.index');
Route::get('/contact', ContactComponent::class)->name('contact.index');
Route::get('/our-approach', ApproachComponent::class)->name('approach.index');
Route::get('/who-we-are', WhoweComponent::class)->name('whowe.index');
Route::get('/what-we-do', WhatweComponent::class)->name('what.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
