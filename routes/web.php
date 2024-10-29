<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('posts/create',[PostController::class,'create']);
Route::post('posts/store',[PostController::class,'store'])->name('posts.store');
