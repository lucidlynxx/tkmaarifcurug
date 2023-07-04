<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\RabuController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JumatController;
use App\Http\Controllers\KamisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SabtuController;
use App\Http\Controllers\SeninController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SelasaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TentangKamiController;

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

Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/tentang-kami', 'about');
    Route::get('/kelas', 'classes');
    Route::get('/guru', 'teachers');
    Route::get('/galeri', 'gallery');
    Route::get('/acara', 'blogs');
    Route::get('/acara/{blog:slug}', 'showBlog');
    Route::get('/kontak', 'contact');
    Route::post('/kontak', 'storeContact');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/beranda', BerandaController::class)->only('index', 'edit', 'update')->middleware('auth');
Route::resource('/dashboard/beranda1', TestimoniController::class)->except('destroy', 'index', 'show')->middleware('auth');

Route::resource('/dashboard/tentang-kami', TentangKamiController::class)->only('index', 'edit', 'update', 'show')->middleware('auth');

Route::resource('/dashboard/kelas', SeninController::class)->except('destroy', 'show')->middleware('auth');
Route::resource('/dashboard/kelas1', SelasaController::class)->except('destroy', 'show', 'index')->middleware('auth');
Route::resource('/dashboard/kelas2', RabuController::class)->except('destroy', 'show', 'index')->middleware('auth');
Route::resource('/dashboard/kelas3', KamisController::class)->except('destroy', 'show', 'index')->middleware('auth');
Route::resource('/dashboard/kelas4', JumatController::class)->except('destroy', 'show', 'index')->middleware('auth');
Route::resource('/dashboard/kelas5', SabtuController::class)->except('destroy', 'show', 'index')->middleware('auth');

Route::resource('/dashboard/guru', GuruController::class)->except('destroy', 'show')->middleware('auth');

Route::resource('/dashboard/galeri', GaleriController::class)->except('destroy', 'show')->middleware('auth');

Route::resource('/dashboard/acara', BlogController::class)->except('destroy')->middleware('auth');

Route::controller(KontakController::class)->group(function () {
    Route::get('/dashboard/kontak', 'index')->middleware('auth');
    Route::get('/dashboard/kontak/{kontak:slug}', 'show')->middleware('auth');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard/admin', 'index')->middleware('auth');
    Route::get('/dashboard/admin/create', 'create')->middleware('auth');
    Route::post('/dashboard/admin', 'store')->middleware('auth');
});
