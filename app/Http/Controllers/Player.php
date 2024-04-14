<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class Player extends Controller
{
        
    function addFavourite(){

        
        
        //get user id from session
        session_start();
        $user_id= $_SESSION['user_id'];
        
        //retrieve body of post request received
        $data= file_get_contents('php://input');

        $data=json_decode($data);
              
        $station_id=$data->station_id;
        $station_type=$data->station_type;


        //add to database
        DB::table('usersFavourites')->insert([
            'user_fk'=>$user_id,
            'favourite_fk' => $station_id,
            'type' => $station_type
          ]);

        //send response to frontend
        http_response_code(200);          
        $message='added to favourites';
        $response=['message'=>$message, 'user'=>$user_id,'station'=>$station_id,'type'=>$station_type];
        echo json_encode($response);

    }

    function removeFavourite(){
        
        //get user id from session
        session_start();
        $user_id= $_SESSION['user_id'];
        
        //retrieve body of post request received
        $data= file_get_contents('php://input');

        $data=json_decode($data);
              
        $station_id=$data->station_id;
        $station_type=$data->station_type;


        //remove from database
        

        $deleted = DB::table('usersFavourites')
        ->where('user_fk', '=', $user_id)
        ->where('favourite_fk', '=', $station_id)
        ->where('type', '=', $station_type)
        ->delete();  

        //send response to frontend
        http_response_code(200);          
        $message='removed to favourites';
        $response=['message'=>$message, 'user'=>$user_id,'station'=>$station_id,'type'=>$station_type,'deleted'=>$deleted];
        echo json_encode($response);

    }


    function play(){
         //retrieve body of post request received
         $data= file_get_contents('php://input');

         $data=json_decode($data);
               
         $station_id=$data->station_id;
         $station_type=$data->station_type;

         session_start();
         //retrieve user_id
         $user_id=$_SESSION['user_id'];         
         
         $message='playing';

         //check if station is favourite
         $exists = DB::table('usersFavourites')
        ->where('user_fk','=', $user_id)
        ->where('favourite_fk','=', $station_id)
        ->where('type','=', $station_type)
        ->get();
    

        if(sizeof($exists)==0){                        
           $favourite=false;             
          } 
        else{
            $favourite=true;              
        }

         $response=['message'=>$message,'station'=>$station_id,'type'=>$station_type,'favourite'=>$favourite];
         echo json_encode($response);

    }

    function getFavourites(){
        include(base_path().'/public/stations.php');
        session_start();
        $filter= $_GET['filter'];
        $user_id=$_SESSION['user_id'];  
        
    
        // get all favourites
        if($filter=='all'){ 
            $request=1;   
            $data= DB::table('usersFavourites')
            ->select('favourite_fk','type')
            ->where('user_fk', '=', $user_id)  
            ->orderBy('favourite_fk')         
            ->get();   
                  
        }
        //get only tv favourites
        else if ($filter=='tv') {
            $request=2;   
            $data= DB::table('usersFavourites')
            ->select('favourite_fk','type')
            ->where('user_fk', '=', $user_id)            
            ->where('type', '=', '1')
            ->orderBy('favourite_fk')
            ->get(); 
        }
           
        else{
            $request=3;   
            $data= DB::table('usersFavourites')
            ->select('favourite_fk','type')
            ->where('user_fk', '=', $user_id)            
            ->where('type', '=', '2')
            ->orderBy('favourite_fk')
            ->get();             
        }

        $response=[];
        foreach($data as $f){
            //retrieve logo & url
            if($f->type=='1'){
                
                $logo=$tvstations[$f->favourite_fk]->logoUrl;
                $src=$tvstations[$f->favourite_fk]->src;
                $name=$tvstations[$f->favourite_fk]->name;
            }
            else{                
                $logo=$radiostations[$f->favourite_fk]->logoUrl;
                $src=$radiostations[$f->favourite_fk]->src;
                $name=$radiostations[$f->favourite_fk]->name;
            }
    
            $favourite=['favourite_fk'=>$f->favourite_fk,'type'=>$f->type,'name'=>$name,'logo'=>$logo,'src'=>$src,'request'=>$request];
    
            array_push($response,$favourite);                
        }
        

        
        
        
        echo json_encode($response);
    }
}
