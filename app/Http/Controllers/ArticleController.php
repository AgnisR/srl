<?php

namespace App\Http\Controllers;
    
use DB;
use App\articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        $articles=articles::find($id);
        return view('article', compact('articles')); //viena article view
    }


}