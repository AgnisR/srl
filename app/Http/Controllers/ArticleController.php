<?php

namespace App\Http\Controllers;
    
use DB;
use Auth;
use App\articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        $articles=articles::find($id);
        return view('article', compact('articles')); //viena article view
    }
    
    public function create(){
        return view('articles.create');
    }

    public function store(){
        
        $this->validate(request(), [
            'title' => 'required',
            'article' => 'required'
        ]);
        
        $post = new articles;
        $post->title = request('title');
        $post->article = request('article');
        $post->author = auth::user()->id;
        
        $post->save();
        
        return redirect('/');
    }
    
}