<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [UserController::class, 'index'])->name('user.login');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/{id}', [NewsController::class, 'show'])->name('news.show')->where('id', '[0-9]+');
    Route::get('/add', [NewsController::class, 'add'])->name('news.add');
});
