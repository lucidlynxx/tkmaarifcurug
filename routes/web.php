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

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'authenticate');
        Route::post('/logout', 'logout');
    });
});

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

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::resource('/beranda', BerandaController::class)->only(['index', 'edit', 'update']);
    Route::resource('/beranda1', TestimoniController::class)->except(['destroy', 'index', 'show']);

    Route::resource('/tentang-kami', TentangKamiController::class)->only(['index', 'edit', 'update', 'show']);

    Route::resource('/kelas', SeninController::class)->except(['destroy', 'show']);
    Route::resource('/kelas1', SelasaController::class)->except(['destroy', 'show', 'index']);
    Route::resource('/kelas2', RabuController::class)->except(['destroy', 'show', 'index']);
    Route::resource('/kelas3', KamisController::class)->except(['destroy', 'show', 'index']);
    Route::resource('/kelas4', JumatController::class)->except(['destroy', 'show', 'index']);
    Route::resource('/kelas5', SabtuController::class)->except(['destroy', 'show', 'index']);

    Route::resource('/guru', GuruController::class)->except(['destroy', 'show']);

    Route::resource('/galeri', GaleriController::class)->except(['destroy', 'show']);

    Route::resource('/acara', BlogController::class)->except('destroy');

    Route::controller(KontakController::class)->group(function () {
        Route::get('/kontak', 'index');
        Route::get('/kontak/{kontak:slug}', 'show');
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::get('/admin/create', 'create');
        Route::post('/admin', 'store');
    });
});
