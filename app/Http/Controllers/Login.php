<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

session_start();

class Login extends Controller
{
    
    function login(){
        
        //get user input
        $email= $_POST['email'];
        $password=$_POST['password'];

        //see if user exists
        $user = DB::table('users')
        ->where('email','=', $email)
        
        ->get();

        //record not found
        if(sizeof($user)==0){            
            http_response_code(400);
            $_POST['error']='Incorrect credentials';                
            return view ('login');
          } 
        //user found, compare passwords   
        else{
            $storedPassword= $user[0]->password;

            // // The passwords match
            if (Hash::check($password,$storedPassword)) {
                http_response_code(200);
                
                $_SESSION['user']=$user[0]->email;
                $_SESSION['username']=$user[0]->username;
                $_SESSION['user_id']=$user[0]->id;

                //redirect to index
                header('Location:http://127.0.0.1:8000/');                        
                die();
                
            }
            else{
                http_response_code(400);
                $_POST['error']='Incorrect credentials';                
                return view ('login');
                
                
            }            
        }

    }

    function logout(){                
        http_response_code(200);        
        session_destroy();

        // echo $_SERVER['REQUEST_URI']; 
        // header('Location:http://127.0.0.1:8000/');  
        die();
        

    }
}
