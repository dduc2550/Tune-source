<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SongController;


Route::group(["prefix"=> "admin","as"=>"admin."], function () {
    //http://localhost:8000/login
    Route::get("login",[LoginController::class,"index"])->name("login");

    // http://localhost:8000/handle-login
    Route::post("handle-login",[LoginController::class,"login"])->name("handle.login");

    Route::post('logout',[LoginController::class,"logout"])->name("logout");
});

Route::group(["middleware" => ["check.admin.login"],"prefix"=> "admin", "as" => "admin."], function(){
    Route::get("dashboard",[DashboardController::class, "index"])->name("dashboard");

    //songs
    Route::get("songs",[SongController::class, "index"])->name("song");
    Route::get("add-song", [SongController::class, "create"])->name("song.add");
    Route::post("handle-add-song",[SongController::class,"handleCreate"])->name("song.handle.add");

    Route::get('edit-song/{id}',[SongController::class,'edit'])->name("song.edit");
    Route::post('handle-edit/{id}',[SongController::class, 'handleEdit'])->name('handle.edit');
    Route::post('delete-song/{id}',[SongController::class,'delete'])->name('song.delete');
});
