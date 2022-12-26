<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
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

   

    <div class="Post"> {{$data->text}}</div>
    
    <div class="Comments">
            <div class="TotalCommentsTitle">Comments({{$quantity }})</div>
            <div class="userscommnetbox">

              

                <ul class="Adminulpost" id="Adminulpost">

                    @for ($i = 0; $i < count($comments); $i++)
                    <li id="{{$comments[$i]->id}}">
                                <div class="userComment">
                                    <div class="rdivforheading">
                                      
                                        <div class="authortitlecomment"> {{$comments[$i]->authorname}}</div>
                                        <button onclick="deleteComment({{$comments[$i]->id}})" class="crudbtn deletebtn">Delete</button>
                                        </div>
                                                    {{-- <div class="authortitlecomment">{{$comments[$i]->authorname}}</div> --}}
                                                    <div class="actualCommentofuser"> {{$comments[$i]->comment}}</div>
                                                </div>

                    </li>
                        @endfor
                    </ul>









                    {{-- <ul class="Adminulpost">
                        <li>
                            <div class="userComment">
                                <div class="rdivforheading">
                                      
                                <div class="authortitlecomment">Giorgi tughushui</div>
                                <button class="crudbtn deletebtn">Delete</button>
                                </div>
                              
            
                                <div class="actualCommentofuser">Lorem ipsum dolor, sit amet 
                                    consectetur adipisicing elit. Maxime excepturi minima id 
                                    autem rem dolorum harum sit ducimus aut. Sint ipsam enim par
                                    consectetur adipisicing elit. Maxime excepturi minima id 
                                    autem rem dolorum harum sit ducimus aut. Sint ipsam enim par
                                    iatur veniam reiciendis amet vel quis expedita in?</div>
                            </div>
                        </li>
                    </ul> --}}
               
                
            </div>
    </div>


  
    </div>


</div>



</body>



<script>

function deleteComment(id){

   
    let li= document.getElementById(id);
    let ul= document.getElementById("Adminulpost");
axios.delete("/deletecomment/"+id, {
          }, {
       headers: {   'Authorization': 'Bearer TOKEN'}
     }).then(function(response) {
       console.log("warmatebit  waishala")
       ul.removeChild( li);
     }).catch(function(error) {
      
     })



}





</script>



</html>