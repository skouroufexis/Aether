
<?php 










?>



<div class='container border top1'>
    <div class='container  border'>
       
        <div class='row top1' >
             <div class='col'>
                <button  class='btn left' @click='exitStation'><i class="fas fa-caret-left"></i> back</button> 
             </div>   
                     
        </div>
        
        <div class='row border top1 '>
            <img class='col player-logo img-fluid' :src='selectedLogo' :alt='selectedStation'>
            <div v-if='favourite' class='col margin-v-auto'>
                @{{selectedStation}}
                <button  class='btn favourite' @click='removeFavourite'><i class="fas fa-star"></i></button>
            </div>

            <div v-if='!favourite' class='col margin-v-auto'>
                @{{selectedStation}}
                <button class='btn notFavourite' @click='addFavourite'><i class="far fa-star"></i></button>
            </div>            
        </div>
        
        <div class='row'>

        <video class='col top1 justify-centre img-fluid' controls autoplay >                
            <source :src='selectedSrc'>
        </video>    
        </div>    

    </div>
</div>


