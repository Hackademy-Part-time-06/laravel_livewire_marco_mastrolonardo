<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;


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

Route::get('/',[PageController::class , 'home'])->name('home');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{article}/show', [ArticleController::class , 'show'])->name('articles.show');
Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/{author}/show', [AuthorController::class , 'show'])->name('authors.show');
Route::get('authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::get('authors/create', [AuthorController::class, 'create'])->name('authors.create');


