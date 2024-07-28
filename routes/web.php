<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatriotsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//the default index
Route::get('/', [HomeController::class,'index']) ->name('home');

//my routes for users that are not logged in
Route::middleware('guest')->group(function () {
    Route::get('/patriots', [HomeController::class,'index']) ->name('patriot');  //index page
});

Route::get('/dashboard', [HomeController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

//routes for logged in users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //index page
    Route::get('/patriot/show/{patriot_id}',[PatriotsController::class,'show']) ->name('patriot.show');
    Route::get('/patriot/create',[PatriotsController::class,'create']) ->name('patriot.create');
    Route::post('/patriot/store',[PatriotsController::class,'store']) ->name('patriot.store');
});

//route for logged in users who are Admins
Route::middleware('is_admin')->group(function () {

    });



require __DIR__.'/auth.php';
