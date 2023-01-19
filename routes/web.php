<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects', [HomeController::class, 'index']);
Route::get('/index', [PageController::class, 'index']);
Route::get('/admin', [PageController::class, 'admin']);
Route::get('/advertise', [PageController::class, 'advertise']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/privacy', [PageController::class, 'privacy']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/help', [PageController::class, 'help']);
Route::get('/tos', [PageController::class, 'tos']);
Route::get('/proofs', [PageController::class, 'proofs']);


Route::post('/addseller', [HomeController::class, 'addseller']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
