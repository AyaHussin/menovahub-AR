<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/connect', function () {
    return view('connect');
});
Route::get('/raise', function () {
    return view('raise');
});
Route::get('/discuss', function () {
    return view('discuss');
});

Route::get('/blog', function () {
    return view('blogs.blog');
});
Route::get('/blog-single', function () {
    return view('blogs.blog-single');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/discuss-single', function () {
    return view('discuss.discuss-single');
});
Route::get('/discuss', function () {
    return view('discuss.discuss');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/user-profile', function () {
    return view('user-profile');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/topics', function () {
    return view('discuss.topics');
});
Route::get('/myprojects', function () {
    return view('myprojects');
});
