<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

 

Route::get('/', [postController::class,'index']);


Route::get('/post/{id}', [postController::class,'postDetailed']);

 

 

Route::Delete('/delete{id}',  [postController::class,'DeletePost'] );



Route::get('/update/{id}',  [postController::class,'updatepage'] );
 
Route::post('/update/{id}',  [postController::class,'updatePost'] );
 
 
    Route::get('/adminpost/{id}',[postController::class,'adminpost']);  
 
    Route::Delete('/deletecomment/{id}',[CommentController::class,'delete']);  


    
    Route::get('/addnewpost', [postController::class,'addnewposts']);
    Route::post('/addnewpost', [postController::class,'AddnewPost']);
 
    Route::post('/addComment/{id}', [CommentController::class,'store']);

    Route::get('/addComment/{id}', [CommentController::class,'store']);


    // Route::domain('subdomain.example.com')->prefix('/admin')->group(function () {
       // });
    
    Route::get('/admin',   [postController::class,'adminindex']);
  
    