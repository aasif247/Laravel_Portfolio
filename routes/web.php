<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;

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

Route::get('/admin/services', [PagesController::class, 'services'])->name('admin.services');

Route::get('/admin/portfolio', [PagesController::class, 'portfolio'])->name('admin.portfolio');

Route::get('/admin/about', [PagesController::class, 'about'])->name('admin.about');

Route::get('/admin/contact', [PagesController::class, 'contact'])->name('admin.contact');

Route::get('/admin/main', [MainPagesController::class, 'index'])->name('admin.main');

Route::put('/admin/main', [MainPagesController::class, 'update'])->name('admin.main.update');
