<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
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

Route::get('/posts/{post}', [PostsController::class, 'show']);
Route::get('/welcome', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard',[DashboardController::class, 'show']);
Route::get('/faq',[FaqController::class, 'show']);
Route::get('/blog',[BlogController::class, 'show']);
Route::get('/articles',[ArticlesController::class, 'index']);
Route::post('/articles', [ArticlesController::class, 'store']);
Route::get('/articles/create' , [ArticlesController::class, 'create']);
Route::get('/articles/{article}',[ArticlesController::class, 'show']);
Route::get('/articles/{article}/edit',[ArticlesController::class, 'edit']);
Route::put('/articles/{article}',[ArticlesController::class, 'update']);



