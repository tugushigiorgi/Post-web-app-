<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Fredoka+One&family=Roboto+Mono:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">

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
        
     
        <input class="PostUpdatesection" id="maininput">
        <button  onclick="addnewpost()"  style="margin-top: 20px" class="crudbtn updatebtn"> Add</button>
            <a href="/admin" class=" crudbtn Exitbtn"> Exit</a>
        
    </div>


</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
     


 function addnewpost(){
     
    let input = document.getElementById("maininput");
 let value = input.value;

 axios.post("/addnewpost", {
        text :  value

      }, {
        headers: {   'Authorization': 'Bearer TOKEN'}
      }).then(function(response) {
        window.location = '/admin/'
      }).catch(function(error) {
        console.log(error);
        console.log(value)
      })






 }





</script>

</body>
</html>