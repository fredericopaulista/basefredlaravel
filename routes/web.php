<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CustomizationController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\DepoimentsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SeoManualController;
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



// Rotas do Painel Administrativo
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin/dashboard');})->name('dashboard');
    Route::get('admin/categorias/{categoryId}/imagem/{photoId}/apagar',[CategoryController::class, 'deletePhoto'])->name('categorias.deletePhoto');
    Route::resource('admin/categorias', CategoryController::class);
    Route::resource('admin/servicos', ServiceController::class);
    Route::get('admin/servico/{serviceId}/faq/create', [ServiceController::class, 'createFaq'])->name('servicos.faq.create');
    Route::post('admin/servico/{serviceId}/faq/store', [ServiceController::class, 'storeFaq'])->name('servicos.faq.store');
    Route::get('admin/servico/{serviceId}/faqs', [ServiceController::class, 'showFaq'])->name('servicos.faq.show');
    Route::resource('admin/tags', TagController::class);
    Route::resource('admin/banners', BannerController::class);
    Route::resource('admin/faqs', FaqController::class);
    Route::resource('admin/depoimentos', DepoimentsController::class);
    Route::resource('admin/configuracoes', ConfigurationController::class);
    Route::resource('admin/paginas', PageController::class);
    Route::resource('admin/customiza', CustomizationController::class);
    Route::resource('admin/seomanual', SeoManualController::class);
});

// Rotas do Site

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/contato',[ContactController::class, 'index'])->name('site.contato');
Route::post('/contatoenvia',[ContactController::class, 'store'])->name('site.contatoEnviar');

Route::get('/{category:slug}', [SiteController::class, 'category'])->name('site.categoria');
Route::get('/{category:slug}/{service:slug}', [SiteController::class, 'services'])->name('site.servico');
Route::get('/{tag:slug}/{tagid}/{service:id}', [SiteController::class, 'tags'])->name('site.tags');



