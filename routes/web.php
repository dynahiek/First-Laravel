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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () { 
    return view('about'); 
});
Route::get('/contact', function (){
    return view('contact');
});

Route::get('/posts', function () { 
    $posts = [ 
        ['title' => 'Post 1', 'content' => 'Content for post 1'], 
        ['title' => 'Post 2', 'content' => 'Content for post 2'], 
        ['title' => 'Post 3', 'content' => 'Content for post 3'], 
    ]; 
    return view('posts', ['posts' => $posts]); 
});

Route::get('/product/{id}', function ($id) { 
    $product = [ 
        'id' => $id, 
        'name' => 'Product ' . $id, 
        'description' => 'Description for product ' . $id, 
        'price' => 100, 
]; 
return view('product', ['product' => $product]); 
});

Route::get('/home',function (){
    return view('front_end.home');
 });
 Route::get('/about',function (){
     return view('front_end.about');
 });
 Route::get('/contact',function (){
     return view('front_end.contact');
 });