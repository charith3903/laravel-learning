<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');



Route::get('/todo',[TodoController::class,'index'])->name('todo');

Route::prefix('/todo',[TodoController::class])->group(function(){

    Route::get('/',[TodoController::class,'index'])->name('todo');
    Route::post('/store',[TodoController::class,'store'])->name('todo.store');

});

