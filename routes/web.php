<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PatriotsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//the default index


//my routes for users that are not logged in
Route::middleware('guest')->group(function () {
    //display the default landing page
    Route::get('/', [HomeController::class,'index']) ->name('home');
    
});


//routes for logged in users
Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('/patriots', [HomeController::class,'patriots']) ->name('dashboard');

    //profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // patriot routes
  Route::get('/patriot/show/{patriot_id}',[PatriotsController::class,'show']) ->name('patriot.show');
  Route::get('/patriot/edit/{patriot_id}',[PatriotsController::class,'edit']) ->name('patriot.edit');
  Route::patch('/patriot/update/{patriot_id}',[PatriotsController::class,'update']) ->name('patriot.update');
    Route::get('/patriot/create',[PatriotsController::class,'create']) ->name('patriot.create');
    Route::post('/patriot/store',[PatriotsController::class,'store']) ->name('patriot.store');
});

//route for logged in users who are Admins
Route::middleware('is_admin')->group(function () {
    //approve a patriot
    Route::get('/patriot/approve/{patriot_id}',[PatriotsController::class,'approve']) ->name('patriot.approve');

    });



require __DIR__.'/auth.php';
