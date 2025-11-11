<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');

Route::get('/articles/create', [ArticleController::class, 'create']) ->name('articles.create');
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
