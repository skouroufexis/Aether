
<?php 
session_start();


?>
<head>
    <!-- bootstrap    -->        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--fontawsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- material symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
</head>


<div id='vue'>

    

    <form  class='container' id='form_login' method='post' autocomplete='off'>

        @csrf
        <div class='container'>

        <div class='row top1 centre'>
            <h2>Login</h2>
        </div>   

        <div class='row top1 centre'>
            <p>Email</p>
        </div>   

        <div class='row  centre'>
            <input  type="text" id='email' name='email'>            
        </div>

        <div class='row top1 centre'>
            <p>Password</p>
        </div>   

        <div class='row  centre'>
            <input type="password" id='password' name='password'>
        </div> 
        
        <div class='row'>
             <button  class=' top1 btn btn-light' >Login</button>
        </div>

        @if (isset($_POST['error']))
        <small class='error top1'>{{$_POST['error']}}</small>
        @endif
        
        
    </form>

    <div class='container'>
        <div class='row top1 centre'>
                <a href='/register'><p class='selected2'><u>Sign-up</u></p></a>
        </div>

        <div class='row top1 centre'>
                <button type='button' class='btn selected'><p>Continue as guest</p></button>
        </div>
    </div>

    

        
        

    </div>
       
    <script src="js/app.js"></script>  

    
    
        
</div>




