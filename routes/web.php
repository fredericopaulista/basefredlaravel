<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
        Route::get('categorias/{categoryId}/imagem/{photoId}/apagar',[CategoryController::class, 'deletePhoto'])->name('categorias.deletePhoto');
    Route::resource('/categorias', CategoryController::class);
    Route::resource('/servicos', ServiceController::class);
    Route::resource('/tags', TagController::class);
});
