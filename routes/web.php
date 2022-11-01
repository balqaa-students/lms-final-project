<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\YearsController;
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

Route::get('/', function () {
    return view('Front.index');
});



Route::prefix('dashboard')->as('dashboard.')->middleware(['auth'])->group( function(){
    Route::get('/', [DashboardController::class , 'index'] )->name('home');
    Route::resource('years', YearsController::class);
} );


require __DIR__.'/auth.php';
