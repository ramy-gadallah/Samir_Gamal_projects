<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $posts=Post::create([
            'title'=>$request->title,
            'body'=>$request->body
        ]);

        // return view('posts.all');
        return redirect()->route('all');
    }


    public function all(){
        $posts=Post::select('id','title','body','created_at','updated_at')->get();

        return view('posts.all',compact('posts'));
    }

    public function edit($id){
        $posts=Post::find($id);
        return view('posts.edit',compact('posts'));
    }

    public function update(Request $request ,$id){
        $post=Post::find($id);
        if($post){
            $post->update($request->all());
        }
        return redirect()->route('all');
    }

    public function delete($id){
        $posts=Post::find($id);
        $posts->delete();

        return redirect()->back();
    }

    public function deleteAll(){
       Post::truncate();
       return redirect()->back();

       
    }
}
