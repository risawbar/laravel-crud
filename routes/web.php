<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Rizki Setiawan",
        "umur" => 26,
        "title" => "About",
        "active" => "about",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
//single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {

    return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::all(),
        'active' => 'categories'
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category $category->name",
        'posts' => $category->posts->load('user', 'category'),
        'active' => 'categories'

    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('posts', [
        'title' => "Post By $user->name",
        'posts' => $user->posts->load('category', 'user'),
        'active' => 'posts'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view("dashboard.index");
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug']);
