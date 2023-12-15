<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ElementsController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ListenController;
use App\Http\Controllers\Frontend\LoginuserController;
use App\Http\Controllers\Frontend\DetailController;



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

Route::get('/home',[HomeController::class, 'index'])->name('fr.home');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/elements', [ElementsController::class, 'index'])->name('elements');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginuserController::class, 'index'])->name('user.login');

Route::get('/albums',[ListenController::class,'listen'])->name("albums.index");
Route::get('/albums/search',[ListenController::class,'search'])->name("search");

Route::get('music/detail/{id}',[DetailController::class, 'index'])->name('fr.detail');
Route::get('download/{id}', [DetailController::class, 'download'])->name('fr.download.song');

Route::get('logout',[LoginuserController::class,'logout'])->name("logout");

