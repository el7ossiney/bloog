<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class,'index'])->name('posts.index');
Route::get('/create',[PostsController::class,'create'])->name('posts.create');
Route::post('/create',[PostsController::class,'store'])->name('posts.store');