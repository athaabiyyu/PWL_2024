<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PhotoController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/category/home-care', [ProductController::class, 'homeCare']);
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('/sales', [SalesController::class, 'index']);





// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);


// // Route::get('/hello', function () {
// //     return 'Hello World';
// // });
// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/salam', function () {
//     return 'Selamat Datang';
// });

// Route::get('/bio', function () {
//     return 'NIM : 2241720249 || NAMA : Aulia Atha Abiyyu Iffat';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// // Route::get('/articles/{id}', function ($id) {
// //     return 'Halaman Artikel dengan ID ' . $id;
// // });

// // Route::get('/user/{name?}', function ($name = null) {
// //     return 'Nama saya ' . $name;
// // });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

// // Route::get('/', [PageController::class,'index']);
// Route::get('/', [HomeController::class, 'index']);

// // Route::get('/about', [PageController::class,'about']);
// Route::get('/about', [AboutController::class, 'about']);

// // Route::get('/articles/{id}', [PageController::class,'articles']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// // Route::get('/greeting', function () {
// //     return view('hello', ['name' => 'Aulia Atha Abiyyu']);
// //     });
// // Route::get('/greeting', function () {
// //     return view('blog.hello', ['name' => 'Andi']);
// // });
// Route::get('/greeting', [WelcomeController::class, 'greeting']);
    
    

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// // Route::get('/', function () {
// //     return view('welcome');
// // });
