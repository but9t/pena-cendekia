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
    return view('home', [
        "title" => "Home"
    ]);

});

Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang Kami"
    ]);
}); 
Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
}); 
Route::get('/blog/{slug}', function () {
    return view('detail-blog', [
        "title" => "Detail Blog"
    ]);
}); 

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak Kami"
    ]);
}); 

