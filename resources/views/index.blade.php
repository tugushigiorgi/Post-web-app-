<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Fredoka+One&family=Roboto+Mono:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  
</head>
<body>
    <div style="display:grid;place-items:center;"> 
     
        @if(count($data)==0)
            <h1>No Posts  added by admin  add from /admin</h1>
        @endif

        <ul class="indexul">


            
           @for ($i = 0; $i < count($data); $i++)
               
            
           
        
            <li>

                <a href="/post/{{$data[$i]->id}}">
                    <div class="postheading"> 
                    <span class="material-symbols-outlined icon">
                        <span class="material-symbols-outlined" style="font-size:40px">
                            account_box
                            </span>
                        </span>
                    <div class="authorName">Admin</div>
                </div>
                <div class="Postw">  {{$data[$i]->text  }}</div>
                   </a> 
            </li>
            @endfor
           
        </ul>
 
    </div>
</body>

<script>


 

 

 
 

</script>
</html>