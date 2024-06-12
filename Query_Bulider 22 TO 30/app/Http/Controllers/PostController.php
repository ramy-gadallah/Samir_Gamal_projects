<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
            DB::table('posts')->insert([
                'title'=>$request->title,
                'body'=>$request->body,
            ]);
            return redirect()->route('post.index');
    }

    public function index(){
       $posts= DB::table('posts')->get();
        return view('posts.index',compact('posts'));
    }
    public function edit($id)
    {
        $post = DB::table('posts')->find( $id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body]
        );
            return redirect()->route('post.index');
        }

  

    public function delete($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect()->back();

    }

    public function deleteAll(){
        DB::table('posts')->delete();
        return redirect()->back();

    }
    public function deleteTrancate(){
        DB::table('posts')->truncate();
        return redirect()->back();

        

    }
    
}   
