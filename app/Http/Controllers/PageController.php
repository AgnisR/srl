<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\articles;

class PageController extends Controller
{
    public function index()
    {
        $article = articles::all();
        return view('start')->with('article', $article);
    }
    public function underconstruction(){
        return view('underconstruction');
    }
}
