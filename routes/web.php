<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Player;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    session_start();
    if(isset($_SESSION['user'])){
        return view('index');
    }
    else{        
        header('Location:http://127.0.0.1:8000/login');        
        // exit();        
        die();
    }
    
});


// Route::get('/view', function () {
//     return view('index');
// });



Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', [Login::class, 'logout']);

Route::post('/login', [Login::class, 'login']);

Route::get('/register', function () {
    return view('register');
    
});

Route::get('/success', function () {
    return view('success');
    
});



$url = "https://www.w3schools.com/js/js_api_intro.asp";

$ch_session = curl_init();

curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch_session, CURLOPT_URL, $url);

$result_url = curl_exec($ch_session);


  



Route::post('/register/comparePasswords', [Register::class, 'comparePasswords']);

Route::post('/register/checkErrors', [Register::class, 'checkErrors']);

Route::post('/register', [Register::class, 'validateFields']);

Route::post('/play', [Player::class, 'play']);

Route::post('/addFavourite', [Player::class, 'addFavourite']);

Route::post('/removeFavourite', [Player::class, 'removeFavourite']);

Route::get('/favourites', [Player::class, 'getFavourites']);