<?php

use App\Http\Controllers\CreateCvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('master');
// });

//Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/createcv', [CreateCvController::class, 'CreateCV'])->name('createcv')->middleware('auth');
Route::post('/storecv', [CreateCvController::class, 'StoreCV'])->name('storecv')->middleware('auth');
Route::get('/viewcv', [CreateCvController::class, 'ViewCV'])->name('viewcv')->middleware('auth');
Route::get('/cvtips', [CreateCvController::class, 'cvtips'])->name('cvtips')->middleware('auth');


Route::get('/jobtips', [CreateCvController::class, 'jobtips'])->name('jobtips')->middleware('auth');
Route::get('/feedback', [CreateCvController::class, 'feedback'])->name('feedback')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');