

<?php 

    $username = $_SESSION['username'];

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

    <meta id='token' name="csrf-token" token="{{ csrf_token() }}">
</head>


<div id='vue'>
<div class='container' id='header'>

    <div class='container'>

        <div class='row border top1'>
            <a href='/'>
                <div>
                    Cyprus live
                </div>
            </a>
        </div>

        <div class='row'>
            
            <button class='btn  left col' @click='toggleSideMenu'>
                <i class="fas fa-ellipsis-v"></i>
                 <span class='left1 black'>Hello {{$username}} </span>                 
            </button>
        </div>
    </div>

    
    <div v-if='sidemenu'>
        <x-sidemenu />
    </div>

</div>





