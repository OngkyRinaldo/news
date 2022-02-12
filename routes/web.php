<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\cms\TagController;
use App\Http\Controllers\cms\PostController;
use App\Http\Controllers\cms\CategoryController;
use App\Http\Controllers\cms\UserController;

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

// frontend route


Auth::routes();
Route::get('/signin', [PageController::class, 'login'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'index_cms'])->name('index');
    Route::resources([
        'category' => CategoryController::class,
        'post' => PostController::class,
        'tag' => TagController::class,
        'user' => UserController::class
    ]);
    Route::get('/changePassword', [HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword', [HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
});

Route::get('/', [PageController::class, 'index'])->name('guest.index');
Route::get('/all-posts', [PageController::class, 'allPost'])->name('guest.all-post');
Route::get('/all-tags', [PageController::class, 'allTags'])->name('guest.all-tag');
Route::get('/tags/{tag}', [PageController::class, 'tags'])->name('guest.tags');
Route::get('/all-category', [PageController::class, 'allCategory'])->name('guest.all-category');
Route::get('/categories/{category}', [PageController::class, 'categories'])->name('guest.categories');
Route::get('/{category}/{post}', [PageController::class, 'single'])->name('guest.post');
Route::get('/search-posts', [PageController::class, 'search'])->name('guest.search-post');
Route::get('{user}', [PageController::class, 'author'])->name('guest.author');
