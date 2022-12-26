<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Fredoka+One&family=Roboto+Mono:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="mainwrapper"> 
        <div  class="divof"> 
        <div class="postheading"> 
        <span class="material-symbols-outlined icon">
            <span class="material-symbols-outlined" style="font-size:40px">
                account_box
                </span>
            </span>
        <div class="authorName">Admin</div>
    </div>
 <div class="Post">{{$data->text}}  </div>
    
    <div class="Comments">
            <div class="TotalCommentsTitle">Comments({{$quantity}})</div>
            <div class="userscommnetbox">
                <ul class="Adminulpost" id="Adminulpost">

                    @for ($i = 0; $i < count($comments); $i++)
                    <li>
                                <div class="userComment">

                                                    <div class="authortitlecomment">{{$comments[$i]->authorname}}</div>
                                                    <div class="actualCommentofuser"> {{$comments[$i]->comment}}</div>
                                                </div>

                    </li>
                        @endfor
                    </ul>
               
                
                
                
            </div>
    </div>


    <div class="Commentbox">
        <div class="WritePostWrapper">
            <div class="AddNewpostTitleof"> Add new Post</div>
            <input id="authornameinput" type="text" placeholder="Enter Your Name" class="AuthorCommentInput">
            <div class="writingPostWrapepr">
             
            <input  id="authorcommentinput" type="text"  class="CommentInput">
            <button onclick="addPost({{$data->id}})" class="addPostBtn">Post</button>
        </div>
        </div>
    </div>

    </div>


</div>

<script>


function addPost(id){

let ul=document.getElementById("Adminulpost");

let  Authorname = document.getElementById("authornameinput");

let   comment = document.getElementById("authorcommentinput");

axios.post("/addComment/"+id, {
      author:Authorname.value,
      coment:comment.value

     }, {
       headers: {   'Authorization': 'Bearer TOKEN'}
     }).then(function(response) {


        const  li  = document.createElement('li');
            li.innerHTML = `
            
            <div class="userComment">

<div class="authortitlecomment">${Authorname.value}</div>
<div class="actualCommentofuser"> ${comment.value}</div>
</div>
            
            
            `

            ul.append(li )






       console.log("warmatebit  daemata")
   
     }).catch(function(error) {
      
     })




}



</script>

</body>
</html>