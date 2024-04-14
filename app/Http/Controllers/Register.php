<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;


 

use App\Models\User;

class Register extends Controller
{
    
    function comparePasswords(){

      //retrieve body of post request received
      $data= file_get_contents('php://input');

      $data=json_decode($data);
      
      $password1=$data->password1;
      $password2=$data->password2;


      if ($password1==$password2) {
        http_response_code(200);  
        $error=false;
        $message='passwords match';            
      } else {            
        http_response_code(400);  
        $error=true;
        $message='Passwords do not match';
      }

      $response=['error'=>$error,'message'=>$message];
      echo json_encode($response);


    }


    function checkErrors(){

     

      $data= file_get_contents('php://input');

      $data=json_decode($data);
        
      $username=$data->username;
      $email=$data->email;
      $password1=$data->password1;
      $password2=$data->password2;
      
      $errors=false;
      $errorUsername='';
      $errorEmail='';
      $errorPassword1='';
      $errorPassword2='';

        //blank fields
        if(empty($username)){
            $errors=true;
            $errorUsername='Invalid username';
        }

        if(empty($password1)){
          $errors=true;
          $errorPassword1='Invalid password';
      }


        //invalid email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {             
            $errors=true;            
            $errorEmail='Invalid email';            
          }         

        //email already exists        
        $emailExists = DB::table('users')
                    ->where('email','=', $email)
                    ->get();
        
        if(sizeof($emailExists)>0){
          $errors=true;
          $errorEmail='Email already exists';            
        }  
        //passwords do not match

        if ($password1!=$password2) { 
            $errors=true;           
            $errorPassword2='Passwords do not match';            
          } 
          
          if($errors==true){
            $response=['errors'=>$errors, 'errorUsername'=>$errorUsername,'errorEmail'=>$errorEmail,'errorPassword1'=>$errorPassword1,'errorPassword2'=>$errorPassword2];
            echo json_encode($response);
          }

          //no errors 
          else{
            
            
            // hash password & add record to database
            $password = Hash::make($password1);

            DB::table('users')->insert([
              'username'=>$username,
              'email' => $email,
              'password' => $password
            ]);            

            $response=['errors'=>$errors, 'errorUsername'=>$errorUsername,'errorEmail'=>$errorEmail,'errorPassword1'=>$errorPassword1,'errorPassword2'=>$errorPassword2];
            echo json_encode($response); 
            
            
          

          }

    }
}
