<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Route::get('/hello', function(){
//     return 'Hello';
// });

Route::get('/world', function(){
    return 'world';
});

Route::get('/', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return '2241760058 Adam Safrila I';
});

Route::get('/user/{adam}', function($name){
    return 'Nama Saya '. $name;
});

Route::get('/posts/{post}/comments/{comments}', function($postId, $commentsId){
    return 'Post ke-'. $postId.' Komentar ke-'. $commentsId;
});

Route::get('/articel/{id}', function($articelId){
    return 'Halaman Artikel dengan ID '. $articelId;
});

Route::get('/user/{adam?}', function($name=null){
    return 'Nama Saya '. $name;
});

Route::get('/user/{adam?}', function($name='john'){
    return 'Nama Saya '. $name;
});


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

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class) -> only (['index','show']);
Route::resource('photos', PhotoController::class) -> except (['create','store','update','destroy']);