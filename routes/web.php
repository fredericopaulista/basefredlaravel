<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\DepoimentsController;
use App\Http\Controllers\Site\SiteController;
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

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/{category}', [SiteController::class, 'category'])->name('site.categoria');
Route::get('/{category}/{id}', [SiteController::class, 'service'])->name('site.servico');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');})->name('dashboard');
    Route::get('categorias/{categoryId}/imagem/{photoId}/apagar',[CategoryController::class, 'deletePhoto'])->name('categorias.deletePhoto');
    Route::resource('/categorias', CategoryController::class);
    Route::resource('/servicos', ServiceController::class);
    Route::get('/servico/{serviceId}/faq/create', [ServiceController::class, 'createFaq'])->name('servicos.faq.create');
    Route::post('/servico/{serviceId}/faq/store', [ServiceController::class, 'storeFaq'])->name('servicos.faq.store');
    Route::get('/servico/{serviceId}/faqs', [ServiceController::class, 'showFaq'])->name('servicos.faq.show');
    Route::resource('/tags', TagController::class);
    Route::resource('/banners', BannerController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/depoimentos', DepoimentsController::class);
    Route::resource('/configuracoes', ConfigurationController::class);
});
