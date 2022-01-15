<?php

use App\Http\Controllers\AdministrativeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CreateCvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PsychiatristController;

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

// For Admin Route
Route::get('/createblog', [BlogController::class, 'createblog'])->name('admin.createblog')->middleware('auth');
Route::post('/createblog', [BlogController::class, 'addblog'])->name('addblog')->middleware('auth');
Route::get('/my/blogs', [BlogController::class, 'myblog'])->name('admin.myblog')->middleware('auth');
Route::get('/my/blog/{id}', [BlogController::class, 'blogedit'])->name('blog.edit')->middleware('auth');
Route::post('/my/blog', [BlogController::class, 'blogupdate'])->name('blog.update')->middleware('auth');
Route::get('/video/upload', [VideoController::class, 'create'])->name('admin.uploadvideo')->middleware('auth');
Route::post('/video/upload', [VideoController::class, 'store'])->name('storedvideo')->middleware('auth');
Route::get('/my/videos', [VideoController::class, 'myvideo'])->name('admin.myvideo')->middleware('auth');
Route::get('/administrative/add', [AdministrativeController::class, 'create'])->name('admin.addadministrative')->middleware('auth');
Route::post('/administrative/add', [AdministrativeController::class, 'store'])->name('admin.storeadministrative')->middleware('auth');

//Blog is news
//Post as Blog

Route::get('/watch-videos', [VideoController::class, 'index'])->name('user.watchvideos')->middleware('auth');
Route::get('/blogs', [BlogController::class, 'index'])->name('viewblog')->middleware('auth');
Route::get('post/create', [PostController::class, 'create'])->name('post.create')->middleware('auth');
Route::post('post/create', [PostController::class, 'store'])->name('poststore')->middleware('auth');
Route::get('my/posts', [PostController::class, 'mypost'])->name('mypost')->middleware('auth');
Route::get('/edit/post/{id}', [PostController::class, 'postedit'])->name('edit.post')->middleware('auth');
Route::post('/edit/post/', [PostController::class, 'updatepost'])->name('update.post')->middleware('auth');
Route::get('/administrative/view', [AdministrativeController::class, 'index'])->name('user.administrative')->middleware('auth');

Route::get('/addpsychiatrist', [PsychiatristController::class, 'addpsychiatrist'])->name('addpsychiatrist')->middleware('auth');
Route::post('/storepsychiatrist', [PsychiatristController::class, 'storepsychiatrist'])->name('storepsychiatrist')->middleware('auth');
Route::get('/viewpsychiatrist', [PsychiatristController::class, 'viewpsychiatrist'])->name('viewpsychiatrist')->middleware('auth');

Route::post('postcomment/{id}', [HomeController::class, 'postcomment'])->name('postcomment')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
