<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($articlesId){
        return 'Halaman Artikel dengan Id '. $articlesId;
    }
}
