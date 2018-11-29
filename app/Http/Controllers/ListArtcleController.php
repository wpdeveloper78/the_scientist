<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  LaravelDay\UseCase\Artcle;;

class ListArtcleController extends Controller
{
    public function __invoke(){

        $listArticle = new ListArticles();

        return $listArticle;
    }
}
