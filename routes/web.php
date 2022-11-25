<?php

use App\Http\Controllers\MagazineController;
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

Route::get('/', [MagazineController::class, 'index'])->name('index');
Route::get('/magazines/{slug}', [MagazineController::class, 'show'])->name('show');
Route::resource('magazine', MagazineController::class);
