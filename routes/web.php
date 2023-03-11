<?php

use App\Http\Controllers\{
    CadastroController,
    SiteController
};

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/site', [SiteController::class, 'index'])->name('site.index');
Route::get('/site/{id}', [SiteController::class, 'show'])->name('site.show');


Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.index');
Route::post('/cadastro/{cdconsulente}', [CadastroController::class, 'postData'])->name('cadastro.postData');




