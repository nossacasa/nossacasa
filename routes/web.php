<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CadastroController;

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

Route::get('/site', [SiteController::class, 'index'])->name('site.index');
Route::get('/site/{id}', [SiteController::class, 'show'])->name('site.show');


Route::get('/cadastro', [CadastroController::class, 'index'])->middleware(['auth'])->name('cadastro.index');
Route::post('/cadastro/store', [CadastroController::class, 'store'])->middleware(['auth'])->name('cadastro.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
