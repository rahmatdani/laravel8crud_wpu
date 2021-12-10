<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'home']);

Route::get('/donasi', [BlogController::class, 'donasi']);

Route::get('/about', [BlogController::class, 'about']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/post/{slug}', [BlogController::class, 'view']);
