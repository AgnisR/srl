<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($t, $i){
        
        $this->validate(request(), [
            'comment' => 'required'
        ]);
        
        $post = new comments;
        $post->type = $t;
        $post->target_id = $i;
        $post->comment = request('comment');
        $post->user_id = auth::user()->id;
        
        $post->save();
        
        return redirect("/articles/{$i}");
    }
}
