<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;


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

/* pRAKTIKUM 1
Route::get('/', function () {
  echo "Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function () {
    echo ("Nim   : 2041720095 <br>"); 
    echo ("Nama  : Rizka Musyarofatul Hidayah <br>"); 
    echo ("Kelas : TI-2G");
});

Route::get('/article/{id}', function ($id= '1') {
    echo ("Ini adalah Halaman Artikel dengan ID " .$id);
});

Route::get('/article/{id}', function ($id= '2') {
    echo ("Ini adalah Halaman Artikel dengan ID ".$id);
});
*/

/* PRAKTIKUM 2 MODIF 1
Route::get('/','App\Http\Controllers\PageController@index');

Route::get('/about','App\Http\Controllers\PageController@about');

Route::get('/articles/{id}','App\Http\Controllers\PageController@articles');
*/

/*PRAKTIKUM 2 MODIF 2
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/

// PRAKTIKUM 3

// Route::get('/', function () {
//     echo "Hallo! Selamat Datang";
// });

// Route::prefix('category') -> group(function () {
//     Route::get("/marbel-edu-games", function () {
//         echo "Halaman Marbel Edu Games";
//     });
//     Route::get("/marbel-and-friends-kids-games", function () {
//         echo "Halaman Marbel and Friends Kids Games";
//     });
//     Route::get("/riri-story-books", function () {
//         echo "Halaman Riri Stroy Books";
//     });
//     Route::get("/kolak-kids-songs", function () {
//         echo "Halaman Kolak Kids Songs";
//     });
// });

// Route::prefix('news') -> group(function () {
//     Route::get("", function () {
//         echo "Ini Merupakan Halaman NEWS";
//     });
//     Route::get("/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19", function () {
//         echo "Ini Merupakan Halaman Studio Berbagi Untuk Warga Sekitar Terdampak Covid-19";
//     });
// });

// Route::prefix('program') -> group(function () {
//     Route::get("/karir" , function () {
//         echo "Ini adalah Halaman Karir";
//     });
//     Route::get("/magang" , function () {
//         echo "Ini adalah Halaman Magang";
//     });
//     Route::get("/kunjungan-industri" , function () {
//         echo "Ini adalah Halaman Kunjungan Industri";
//     });
// });

// Route::get("/about-us" , function () {
//         echo "Nama  : Rizka Musyarofatul Hidayah <br>";
//         echo "NIM   : 2041720095 <br>";
//         echo "Kelas : TI-2G";
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Jobsheet 3

// Route::get('/', function(){
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
