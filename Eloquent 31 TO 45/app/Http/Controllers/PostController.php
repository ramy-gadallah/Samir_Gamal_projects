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
                                        // *الطريقة الاولى *

       Post::create([    // الطريقة العادية ودى افضل طريقة 
        'title'=>$request->title,
        'body'=>$request->body
    ]);
                                        //  * الطريقة الثانية  *

    //    Post::create( 
    //     $request->all()  // نفس التسمية  columns in database = $requwst->input  الطريقة دى فى حال ان 
    //    );

                                         //  * الطريقة الثالثة  
                // $posts=new Post();     //model(Post) اللى هوا ال class وال $posts هنا ال $object ال class من  $object هنا عملت 
                // $posts->title =$request->title;
                // $posts->body =$request->body;
                // $posts->save();


         return redirect()->route('all');

    }


    public function all(){
// $posts=Post::all(); // دى طريقة بتجبلك كل الداتا
// $posts=Post::get(); //بتجبلك كل الداتا  all() ودى برضو نفس طريقة ال 
// return $posts;

        $posts=Post::select('id','title','body','created_at','updated_at')->get();
        //اللى جايه من الداتا بيز  column دى بتحدد ال  select ال 
        return view('posts.all',compact('posts'));
    }

    public function edit($id){
        $posts=Post::find($id);

        if($posts)
            return view('posts.edit',compact('posts'));
        else 
            return 'This id Not Failed';
    }

    public function update(Request $request ,$id){

                                //*الطريقة الاولى *

        $post=Post::find($id); 
        if($post){ 
            $post->update($request->all()); 

                              // *الطريقة الثانية*   

            //  $post=Post::find($id); 
            //  $post->title = $request->title;         
            //  $post->body = $request->body;           
            // $post->save();


        }
        return redirect()->route('all');
    }
    
                                        //*الطريقة الاولى *
    // blade  فى صفحة ال  <a href="{{ route('') }}}}"></a> بيعمل حذف ب استخدام                                   
    public function delete($id){

        $posts=Post::find($id);
        $posts->delete();

        // $posts=Post::find($id)->delete(); // طريقة تانية 
        // $pos::destroy($id)  // الطريقة الثالثة
        return redirect()->back();
    // }
                                        // *الطريقة الثانية*

        // blade  فى صفحة ال  form بيعمل حذف ب استخدام                                   
    // public function delete($id){
    //     $post=Post::find($id);
    //     $post->delete();
    //     return redirect()->back();
    }

    public function deleteAll(){
       Post::truncate();
       return redirect()->back();

       
    }

    public function all_soft_delete(){

        $posts=Post::onlyTrashed()->get(); //onlyTrashed نفس خطوات العرض العادى بس بيختلف ف خظوة ال 
        return view('posts.all_soft_delete',compact('posts'));
    }

    public function restore($id){
//للجدول الاساسى اللى كانت موجوده فيه  soft delete هنا برجع الداتا المحذوفة ب 
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

    public function scopeQuery1(){
        $post=Post::Ramy(); //وبتستدعيها هنا بدل م اعملها هنا  model ودى بننعمل ف ال  query هنا استخدمت ال 
        return $post;
    }

    public function scopeQuery2(){
        $post=Post::hazem(); //وبتستدعيها هنا بدل م اعملها هنا  model ودى بننعمل ف ال  query هنا استخدمت ال 
        return $post;
    }



}

