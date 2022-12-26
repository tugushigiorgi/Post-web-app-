<?php

namespace App\Http\Controllers;
 
use App\Models\post;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class postController extends Controller
 
{
    

    function index(){
        $posts=post::all();
         
        return  view('index',["data"=> $posts]);
       
    }

    function adminindex(){
 $posts=post::all();
         
        return  view('adminIndex',["data"=> $posts]);

    }

    function postDetailed($id){

  $post = post::find($id) ;

  $comment =  $post->comments;
  $count = $comment->count();
   


        return view('Post',["data"=>$post,"comments"=>$comment,"quantity"=>$count ]);

    }
        function adminpost($id){

            $posts = post::find($id) ;
            $comment =  $posts->comments;
            $count = $comment->count();


            return  view('adminPostPage',["data"=> $posts , "comments"=>$comment,"quantity"=>$count    ]);

        }


    function  DeletePost($id){
        
        $post = post::find(  $id);
        
        $post->delete();
        return response()->json("succes",200);
    }

    function AddnewPost( Request $request){
        $posts=new post();
       
        $posts->text= $request->text;
      

        $posts->save();

        


        return response()->json( ['name' =>  $request->text]);
    }
    function addnewposts(){

        return view('addnewpost');

    }

    function  updatepage($id){

        $post = post::find($id) ;


            return view('update',["data"=>$post]);
         
    }

    function updatePost( Request $request, $id){

        $post = post::findOrFail($id);
        $post->text=$request->text;
        $post->save();
        return response()->json  ( $request->text, 200);

    }


}
