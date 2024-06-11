<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

            ///////////////////////////// method of one to many Relation ///////////////////////////////////////

    public function posts(){
        $post = Post::find(1);

        return $post->comments;
        
    }

    public function comments(){

        $comment=Comment::find(1);
        return $comment->post;
    }

   

}
