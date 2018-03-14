<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\articles;

class PageController extends Controller
{
    public function index()
    {
        return view('start');
    }
    public function underconstruction(){
        return view('underconstruction');
    }
}
