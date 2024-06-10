<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::ramy(); //Model قى ال  Query Scope هنا استخدمت ال 
        return view('posts.all',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {


        // $request->validate([
        //     'title'=>'required|unique:posts',
        //     'body'=>'required'
        // ],[
        //     'title.required'=>__('message.    must be required'),
        //     'title.unique'=>__('message. must be unique'),
        //     'body.required'=>__('message. body must be required')
        // ]);

      $post= Post::create([
        'title'=>$request->title,
        'body'=>$request->body,
        
       ]);

       return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=post::find($id);
        // return $post;
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->back();
        

    }

    public function home(){
        return view('welcome');
    }

    public function deleteAll(){
        Post::truncate();
        return redirect()->back();
    }
    public function AllSoftDelete(){
        $posts=Post::onlyTrashed()->get();
        return view('posts.AllSoftDelete',compact('posts'));
    }

    public function Restore($id){
        Post::withTrashed()->where('id',$id)->restore();
        return redirect()->route('post.index');
    }

    public function ForceDelete($id){
        Post::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }

    public function updates(Request $request ,$id){

        $post=Post::find($id);
        $post->update($request->all());
        return redirect()->route('post.index'); 
    }
}
