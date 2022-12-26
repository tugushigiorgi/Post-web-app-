<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Fredoka+One&family=Roboto+Mono:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">


</head>
<body>
    
    <div style="display:grid;place-items:center;"> 
     
            <a href="/addnewpost" class="AddNewPostAtag">Add new Post</a>
     

        <ul class="indexul" id="myul">
            
            @for ($i = 0; $i < count($data); $i++)
           
            <li id="{{$data[$i]->id}}">
                
               
                    <div class="postheading"> 
                       
                        <a class="crudbtn updatebtn" href="/update/{{$data[$i]->id}}" > Update</a>
                        <button onclick="deletef({{$data[$i]->id}})" class="crudbtn deletebtn">Delete</button>
                      
                </div>  
                <a href="/adminpost/{{$data[$i]->id}}"> 
                <div class="Postw">  {{$data[$i]->text }}</div>
            </a> 
            </li>
            @endfor
          
        </ul>
 
    </div>
</body>



<script>
function deletef(id){
    let li= document.getElementById(id);
    let ul= document.getElementById("myul");
axios.delete("/delete"+id, {
       u_id:id
       
     }, {
       headers: {   'Authorization': 'Bearer TOKEN'}
     }).then(function(response) {
       console.log("warmatebit waishalaa")
       ul.removeChild( li);
     }).catch(function(error) {
      
     })




}




</script>










</html>