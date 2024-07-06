<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatriotsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('people.index');
});

//my routes for users that are not logged in
Route::middleware('guest')->group(function () {
    Route::view('/patriot','people.index') ->name('patriot');  //index page
});

Route::get('/dashboard', function () {
    return view('people.index');
})->middleware(['auth', 'verified'])->name('dashboard');

//routes for logged in users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //index page
    Route::view('/patriot','people.index') ->name('patriot');
    Route::get('/patriot/create',[PatriotsController::class,'create']) ->name('patriot.create');
    Route::post('/patriot/store',[PatriotsController::class,'store']) ->name('patriot.store');
});

//route for logged in users who are Admins
Route::middleware('is_admin')->group(function () {

    });

require __DIR__.'/auth.php';
