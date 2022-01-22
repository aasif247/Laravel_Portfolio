<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('portfolio', [PagesController::class, 'index']);

Route::get('/admin/dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/portfolio', [PagesController::class, 'portfolio'])->name('admin.portfolio');

Route::get('/admin/about', [PagesController::class, 'about'])->name('admin.about');

Route::get('/admin/contact', [PagesController::class, 'contact'])->name('admin.contact');

Route::get('/admin/main', [MainPagesController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [MainPagesController::class, 'update'])->name('admin.main.update');

Route::get('/admin/service/create', [ServicePagesController::class, 'create'])->name('admin.service.create');
Route::post('/admin/service/store', [ServicePagesController::class, 'store'])->name('admin.service.store');

Route::get('/admin/service/list', [ServicePagesController::class, 'list'])->name('admin.service.list');
Route::get('/admin/service/edit/{id}', [ServicePagesController::class, 'edit'])->name('admin.service.edit');
Route::post('/admin/service/update/{id}', [ServicePagesController::class, 'update'])->name('admin.service.update');

Route::delete('/admin/service/destroy/{id}', [ServicePagesController::class, 'destroy'])->name('admin.service.destroy');