<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 

  
use App\Models\post;
use App\Models\comment;
class CommentController extends Controller
{

    
    public function store(Request $request, $id)
    {
       

        $post = post::find($id);

        $comment = new comment();
        
        $comment->authorname = $request->author;
     
        $comment->comment = $request->coment;
    
        $comment->post()->associate($post);

        $comment->save();

     

        return  response()->json("succes");
    }

 
 

    public function delete($id)
    {
        error_log( $id );
        $comment = comment::find($id);
        $comment->delete();

        return response()->json('success');
         
    }
}
