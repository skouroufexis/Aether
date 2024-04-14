
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

    <meta id='token' name="csrf-token" token="{{ csrf_token() }}">

</head>


<div id='vue'>
    
   
    <!-- @if(isset($_POST['username'])) 
    <div class='container'>
        
            <div class='row top1'>
                <h1 class='col top1 centre'>Account successfully created</h1>
            </div>
    
            <div class='row top1 centre'>
                <a href='/login'><button class='col btn btn-light'>Login</button></a>
            </div>
        
    </div>
    
    @else -->
    

    <form name='formRegister' class='container' id='form_reigister' method='post' autocomplete='off'>

        @csrf
        <div class='container'>

        <div class='row top1 centre'>
            <h2>Create new account</h2>
        </div>   

        <div class='row top1 centre'>
            <p>Username</p>            
        </div>   

        <div class='row  centre'>
            <input  type="text" id='username' name='username' @keyup='setUsername'>            
            <span class='error left' v-if='errorUsername!=""'><small>@{{errorUsername}}</small></span>    
        </div>

        <div class='row top1 centre'>
            <p>Email</p>            
        </div>           
        <div class='row  centre'>            
            <input  type="text" id='email' name='email' @keyup='setEmail'>                         
            <span class='error left' v-if='errorEmail!=""'><small>@{{errorEmail}}</small></span>    
        </div>

        <div class='row top1 centre'>
            <p>Password</p>
        </div>   

        <div class='row centre'>
            <input :value='password1' type="password" id='password1' name='password1' @keyup='setPassword1' @focus='resetPassword' >
            <span class='error left' v-if='errorPassword1!=""'><small>@{{errorPassword1}}</small></span>    
        </div> 

        <div v-if='password1!="" && errorPassword1==""' class='row top1 centre'>
            <p>Repeat password</p>
        </div>   

        <div v-if='password1!="" && errorPassword1==""' class='row  centre'>            
            <input :value='password2' type="password" id='password2' name='password2' @keyup='setPassword2'>            
            <span class='error left' v-if='errorPassword2!=""'><small>@{{errorPassword2}}</small></span>    
        </div>         

        <div class='row'>            
            <button  type='button' class=' top1 btn btn-light' @click='checkErrors' >Sign-up</button>
        </div>                
    </form>

    <div class='container'>
        <div class='row top1 centre'>
                <a href='/login'><p>Back</p></a>
        </div>
    </div>
    <!-- @endif -->
    </div>
       
    <script src="js/app.js"></script>  
    
        
</div>




