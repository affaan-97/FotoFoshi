<?php

use App\Http\Controllers\picsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/pics')->name("dashboard");

 route::middleware(["auth",'verified'])->group(function () {
  //  Route::get('/pics/{id}/edit', [picsController::class, 'edit'])->name('pics.edit');
  //  Route::put('/pics/{id}', [picsController::class, 'update'])->name('pics.update');
  //  Route::delete('/pics/{id}', [picsController::class, 'destroy'])->name('pics.destroy');
   // Route::get('/pics/create', [picsController::class, 'create'])->name('pics.create');
   // Route::post('/pics', [picsController::class, 'store'])->name('pics.store');
   //Route::get('/pics', [picsController::class, 'index'])->name('pics.index');
   // Route::get('/pics/{id}', [picsController::class, 'show'])->name('pics.show');
   
   Route::resource('pics', picsController::class);
 });



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
