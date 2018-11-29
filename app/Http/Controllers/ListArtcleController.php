<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListArtcleController extends Controller
{
    public function invoke(){

        $listArticle = new Article();

        return $listArticle;
    }
}
