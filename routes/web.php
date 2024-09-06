<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TransaksiController;


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

// Route::get('/user/{adam}', function($name){
//     return 'Nama Saya '. $name;
// });

Route::get('/posts/{post}/comments/{comments}', function($postId, $commentsId){
    return 'Post ke-'. $postId.' Komentar ke-'. $commentsId;
});

Route::get('/articel/{id}', function($articelId){
    return 'Halaman Artikel dengan ID '. $articelId;
});

// Route::get('/user/{adam?}', function($name=null){
//     return 'Nama Saya '. $name;
// });

// Route::get('/user/{adam?}', function($name='john'){
//     return 'Nama Saya '. $name;
// });


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

Route::get('/greeting', function() {
    return view('blog.hello', ['name' => 'Adam']);
});

Route::get('/greeting', [WelcomeController::class,'greeting']);

//  POS

// home
Route::get('/home', function(){
    return view('home');
});

// user
Route::get('/user/{id}/name/{name}', function($id='null',$name='null'){
    return ''.$id.'  '.$name;
});

//products
Route::prefix('/products')->group(function () {
    Route::get('/category/food-beverage', function(){
        return 'Halaman food-beverage';
    });
    Route::get('/category/beauty-health', function(){
        return 'Halaman beauty-health';
    });
    Route::get('/category/home-care', function(){
        return 'Halaman home-care';
    });
    Route::get('/category/baby-kid', function(){
        return 'Halaman baby-kid';
    });
});

//Penjualan
Route::get('/transaksi', [TransaksiController::class,'transaksi']);

