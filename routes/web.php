<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MembersController;
use App\Http\Controllers\Dashboard\TopicsController;
use App\Http\Controllers\Dashboard\YearsController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

Route::get('/', [HomeController::class , 'index']);
Route::get('topics/{year}' , [HomeController::class , 'topics'])->name('home.topics');



Route::prefix('dashboard')->as('dashboard.')->middleware(['auth'])->group( function(){
    Route::get('/', [DashboardController::class , 'index'] )->name('home');
    Route::resource('years', YearsController::class);
    Route::resource('categories' , CategoryController::class);
    Route::resource('topics' , TopicsController::class);
    Route::resource('members' , MembersController::class);
} );

require __DIR__.'/auth.php';
