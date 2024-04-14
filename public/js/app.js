
  const { createApp } = Vue;

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        sidemenu:false,  
        isBlank:true,      
        username:'',  
        errorUsername:'',      
        email:'',
        errorEmail:'',
        password1:'',
        password2:'',
        password:'',        
        errorPassword1:'', 
        errorPassword2:'',              
        token:'',
        selectedStationId:'',
        selectedStationType:'',
        selectedStation:'',
        selectedLogo:'', 
        selectedSrc:'',
        favourite:'',       
        menuSelection:1,
        favouritesFilter:1,
        favourites:[],
        request:''
      }
    },

    methods: {
      toggleSideMenu:function(){
        this.sidemenu=!this.sidemenu;
      },

      setUsername:function(){
        this.username=document.getElementById('username').value.trim();                        
      },

      setEmail:function(){
        this.email=document.getElementById('email').value.trim();
      },

      setPassword1:function(){                
        this.password1=document.getElementById('password1').value.trim();  
      
      },          
      setPassword2:function(){        
        this.password2=document.getElementById('password2').value;           
        //compare passwords        
        let url= '/register/comparePasswords';

        let data={password1:this.password1,password2:this.password2};
        
        fetch(url,{
          method:'POST',          
          headers: {            
             'X-CSRF-TOKEN': this.token, 
             'Content-Type': 'application/json',   
          },

          body:JSON.stringify(data)

        })
        .then(x => x.json())
        .then(y => {

          
          if(y.error==true){
          console.log(y);
            this.errorPassword2=y.message;            
                         
          }
          else{
            console.log(y);
            this.errorPassword2="";    
            this.password=this.password1;                   
          }
        });  


      },

      //resets passwords to "" if password1 input gets focus
      resetPassword:function(){
        this.password1="";
        this.password2="";
        this.password=""
        this.errorPassword1="";   
        this.errorPassword2="";   
      },

      //checks errors before submitting
      checkErrors:function(){

        //compare passwords        
        let url= '/register/checkErrors';

        let data={username:this.username,email:this.email, password1:this.password1, password2:this.password2};
        
        fetch(url,{
          method:'POST',          
          headers: {            
             'X-CSRF-TOKEN': this.token, 
             'Content-Type': 'application/json',   
          },

          body:JSON.stringify(data)

        })
        .then(x => x.json())
        .then(y => {

          
          if(y.errors==true){
          console.log(y);
            this.errorUsername=y.errorUsername;            
            this.errorEmail=y.errorEmail;            
            this.errorPassword1=y.errorPassword1;            
            this.errorPassword2=y.errorPassword2;            
                         
          }
          else{
            // console.log(y);
            this.errorUsername=y.errorUsername;            
            this.errorEmail=y.errorEmail;            
            this.errorPassword1=y.errorPassword1;            
            this.errorPassword2=y.errorPassword2;    
            
            
            location.replace('/success');
          }
        }); 

      },

      //sign out 
      logout:function(){
        
        let url = '/logout';
        fetch(url, {        
        }          
          )
        .then(x => {         
          console.log(x.status);
          location.replace('/');
        });
        
        
      },

      play:function(id,type,name,logo,src){
        this.selectedStationId=id;
        this.selectedStationType=type;
        this.selectedStation=name;
        this.selectedLogo=logo;        
        this.selectedSrc=src;

        let url = '/play';
        let data={station_id:this.selectedStationId,station_type:this.selectedStationType};

        fetch(url,{
          method:'POST',          
          headers: {            
             'X-CSRF-TOKEN': this.token, 
             'Content-Type': 'application/json',   
          },
          body:JSON.stringify(data)
        })
        .then(x => x.json())
        .then(y => {      
          console.log(y);
          this.favourite=y.favourite;                        
        });  


      },
    
      exitStation:function(){
        this.selectedStation='';
        this.selectedLogo='';        
        this.favourite='';

        //request favourites again, in case user removes station from favourites
        //when playing a station from "favourites" tab

        if(this.request!=''){
          this.getFavourites(this.request);
        }


      },

      //adds station to favourites
      addFavourite:function(){
        let url = '/addFavourite';
        let data={station_id:this.selectedStationId,station_type:this.selectedStationType};

        fetch(url,{
          method:'POST',          
          headers: {            
             'X-CSRF-TOKEN': this.token, 
             'Content-Type': 'application/json',   
          },
          body:JSON.stringify(data)
        })
        .then(x => x.json())
        .then(y => {          
          console.log(y); 
          this.favourite=true;           
        });  

      },

      //removes station from favourites
      removeFavourite:function(){

        let url = '/removeFavourite';
        let data={station_id:this.selectedStationId,station_type:this.selectedStationType};

        

        fetch(url,{
          method:'POST',          
          headers: {            
             'X-CSRF-TOKEN': this.token, 
             'Content-Type': 'application/json',   
          },
          body:JSON.stringify(data)
        })
        .then(x => x.json())
        .then(y => {          
          console.log(y); 
          this.favourite=false;           
        });  

      },

      filterFavourites:function(n){
        this.favouritesFilter=n;

        this.getFavourites(n)

      },

      getFavourites:function(n){
        let url;
        this.request='';
        this.favourites=[];

        //determine get url
        if(n==1){
          url='/favourites?filter=all'
        }
        else if (n==2){
          url='/favourites?filter=tv'
        }
        else{
          url='/favourites?filter=radio'
        }      
        fetch(url,{
          method:'GET',          
          headers: {            
             'X-CSRF-TOKEN': this.token,              
          },          
        })
        .then(x => x.json())
        .then(y => {
          
          console.log(y);      
          this.request=y[0].request;
          console.log(this.request);
          for(f of  y){
            this.favourites.push(f)
            
          }
          console.log(this.favourites)                    
        });  

      

      },

      //backend sends updated favourites list
      // frontend will populate favourites array to update list displayed
      //withoud refreshing
      populateFavourites:function(favourites){
        for(f of favourites){
          this.favourites.push(f)
        }
        console.log(this.favourites);
        
      },

      //navigates between menu options
      menu:function(n){
        this.menuSelection=n;
        this.favouritesFilter=1;


        //if n = 3, send get first request to retrieve favourites
        if(n==3){
          this.getFavourites(1);
        }


      }


      
    },

    mounted:function(){
      this.token=document.getElementById('token').getAttribute('token');
    }
  }).mount('#vue')
