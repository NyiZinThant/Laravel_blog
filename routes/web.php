<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Product\ProductController;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail', function () {
    return "Article Detail";
})->name("article.detail");

Route::get('/articles/detail/{id}', [
    ArticleController::class,
    'detail'
])->name("articles.detail");

Route::get('/articles/more', function () {
    return redirect()->route('article.detail');
});

Route::get('/products', [ProductController::class, "index"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/add', [ArticleController::class, 'add']);

Route::post('/articles/add', [ArticleController::class, 'create']);

Route::get('/articles/delete/{id}', [
    ArticleController::class,
    'delete'
]);

Route::post('/comments/add', [CommentController::class, 'add']);
Route::get('/comments/delete/{id}', [CommentController::class, 'delete']);
