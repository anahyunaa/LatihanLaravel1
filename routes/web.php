<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/signin', function () {
    return 'Signin Form';
});

Route::post('/signin', function () {
    return 'Process Signin';
});

Route::get('/signup', function () {
    return 'Signup Form';
});

Route::post('/signup', function () {
    return 'Process Signup';
});

Route::get('/', function () {
    return 'Halaman utama!';
});

Route::get('/blog', function () {
    return 'Daftar Artikel Blog:';
});

Route::get('/blog/{slug}', function ($slug) {
    return "Blog Post: $slug";
});

Route::get('/blog/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Untitled');
    $content = request()->query('content', 'No content provided');
    
    return "Blog ID: $blogId, Title: $title, Content: $content";
});

Route::get('/category/{slug}', function ($slug) {
    return "Category: $slug";
});

Route::get('/author/{username}', function ($username) {
    return "Author: $username";
});

Route::get('/privacy-policy', function () {
    return 'ini halaman Kebijakan privasi';
});