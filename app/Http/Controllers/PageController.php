<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Adam Safrila I 2241760058';
    }

    public function articles($articlesId){
        return 'Halaman Artikel dengan Id '. $articlesId;
    }
}
