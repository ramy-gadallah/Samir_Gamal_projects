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
        Post::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'street'=>$request->street,
        ]);
        return redirect()->route('index');

    }

    public function index(){

      $posts=  Post::get();
        return view('posts.index',compact('posts'));
    }

    public function edit($id){
        $posts=Post::find($id);
         return view('posts.edit',compact('posts'));
    }

    public function update(Request $request ,$id){
        $post=Post::find($id);
        $post->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'street'=>$request->street,
        ]);
        return redirect()->route('index');
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->back();
    }

    public function truncate(){
        Post::truncate();
        return redirect()->back();
    }

    public function all_soft_delete(){

       $posts=Post::onlyTrashed()->get();
        return view('posts.posts_with_soft_delete',compact('posts'));
    }

    public function restore($id){
        Post::withTrashed()
        ->where('id', $id)
        ->restore();  

        return redirect()->back();
    }

    public function forceDelete($id){
        Post::withTrashed()
        ->where('id', $id)
        ->forceDelete();

        return redirect()->back();
    }
}
