<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControlleur;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// ------Home Page------//
Route::get('/', function () {
    return view('pages/Home/index');
})->name('home');

// -------Destinations------- //
Route::get('/destinations', function () {
    return view('pages/villes/destinations');
});
Route::get('/explore',function(){
    return view('pages.explore');
});

//----------Dashboard----------//
Route::get('/dashboard', function () {
    return view('dashboardcomponents.dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');
        //------Users------//
Route::get('/users',[UserControlleur::class,'showall'])->name('userstable');

//-------------Authentification------------//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
