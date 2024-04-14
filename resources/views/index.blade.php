
<?php 
include 'stations.php';

// class TvStation{

//     public $type; //tv or radio station 1 = tv 2 = radio
//     public $name;
//     public $logoUrl;
//     public $id;
//     public $url;
//     public $src;

// }

// class RadioStation{
//     public $type; //tv or radio station 1 = tv 2 = radio
//     public $name;
//     public $logoUrl;
//     public $id;
//     public $url;
//     public $src;
// }

// //create tv station objects
// $cybc1=new TvStation();
// $cybc1->name='CyBC 1';
// $cybc1->logoUrl='/logos/tv/cybc1.png';
// $cybc1->url='http://cybc.com.cy/live-tv/ρικ-1/';
// $cybc1->src='https://l6.cloudskep.com/rikcy/rik1/playlist.m3u8';



// $cybc2=new TvStation();
// $cybc2->name='CyBC 2';
// $cybc2->logoUrl='/logos/tv/cybc2.png';
// $cybc2->url='http://cybc.com.cy/live-tv/ρικ-2/';
// $cybc2->src='https://l6.cloudskep.com/rikcy/rik2/playlist.m3u8';

// $cybchd=new TvStation();
// $cybchd->name='CyBC HD';
// $cybchd->logoUrl='/logos/tv/cybchd.png';
// $cybchd->url='http://cybc.com.cy/live-tv/ρικ-hd/';
// $cybchd->src='https://l6.cloudskep.com/rikcy/rikhd/playlist.m3u8';

// $cybcs=new TvStation();
// $cybcs->name='CyBC SAT';
// $cybcs->logoUrl='/logos/tv/cybcs.png';
// $cybcs->url='http://cybc.com.cy/live-tv/ρικ-sat/';
// $cybcs->src='https://l3.cloudskep.com/cybcsat/abr/playlist.m3u8';


// $alpha=new TvStation();
// $alpha->name='Alpha';
// $alpha->logoUrl='/logos/tv/alpha.png';
// $alpha->url='https://www.alphacyprus.com.cy/live';
// $alpha->src='https://l4.cloudskep.com/alphacyp/acy/playlist.m3u8';

// $ant1=new TvStation();
// $ant1->name='ANT1';
// $ant1->logoUrl='/logos/tv/ant1.png';
// $ant1->url='https://www.ant1live.com/webtv/live';
// $ant1->src='https://l2.cloudskep.com/ant1cm2/abr/playlist.m3u8';

// $sigma=new TvStation();
// $sigma->name='Sigma';
// $sigma->logoUrl='/logos/tv/sigma.png';
// $sigma->url='https://www.sigmatv.com/live';
// $sigma->src='https://l10.cloudskep.com/sigmatv/stv/playlist.m3u8';

// $omega=new TvStation();
// $omega->name='Omega';
// $omega->logoUrl='/logos/tv/omega.png';
// $omega->url='http://www.omegatv.com.cy/live/';
// $omega->src='https://l1.cloudskep.com/tst/omcy/playlist.m3u8';



// $tvstations=[$cybc1,$cybc2,$cybchd,$cybcs,$alpha,$ant1,$sigma,$omega];
// sort($tvstations);



// //create radio station objects
// $cybc1Radio = new RadioStation();
// $cybc1Radio->name='CyBC 1 Radio';
// $cybc1Radio->logoUrl='/logos/radio/cybc1.png';
// $cybc1Radio->url='';
// $cybc1Radio->src='https://r1.cloudskep.com/cybcr/cybc1/iplaylist.m3u8';


// $cybc2Radio = new RadioStation();
// $cybc2Radio->name='CyBC 2 Radio';
// $cybc2Radio->logoUrl='/logos/radio/cybc2.png';
// $cybc2Radio->url='';
// $cybc2Radio->src='https://r1.cloudskep.com/cybcr/cybc2/iplaylist.m3u8';


// $cybc3Radio = new RadioStation();
// $cybc3Radio->name='CyBC 3 Radio';
// $cybc3Radio->logoUrl='/logos/radio/cybc3.png';
// $cybc3Radio->url='';
// $cybc3Radio->src='https://r1.cloudskep.com/cybcr/cybc3/iplaylist.m3u8';


// $cybc4Radio = new RadioStation();
// $cybc4Radio->name='CyBC 4 Radio';
// $cybc4Radio->logoUrl='/logos/radio/cybc4.png';
// $cybc4Radio->url='';
// $cybc4Radio->src='https://r1.cloudskep.com/cybcr/cybc4/iplaylist.m3u8';



// $ant1Radio=new RadioStation();
// $ant1Radio->name='ANT1 Radio';
// $ant1Radio->logoUrl='/logos/radio/ant1.jpg';
// $ant1Radio->url='';
// $ant1Radio->src='https://r1.cloudskep.com/radio2/ant1fm/icecast.audio';


// $lovefmRadio=new RadioStation();
// $lovefmRadio->name='Love FM';
// $lovefmRadio->logoUrl='/logos/radio/love.jpg';
// $lovefmRadio->url='';
// $lovefmRadio->src='http://eradio.networksolutions.com.cy:1935/LoveRadio/Loveradio.stream/playlist.m3u8';


// $astraRadio=new RadioStation();
// $astraRadio->name='Astra';
// $astraRadio->logoUrl='/logos/radio/astra.png';
// $astraRadio->url='';
// $astraRadio->src='https://securestreams2.autopo.st:1106/stream';

// $sferaRadio=new RadioStation();
// $sferaRadio->name='Sfera';
// $sferaRadio->logoUrl='/logos/radio/sfera.png';
// $sferaRadio->url='';
// $sferaRadio->src='https://securestreams3.autopo.st:1417/sfera';


// $politisRadio=new RadioStation();
// $politisRadio->name='Politis';
// $politisRadio->logoUrl='/logos/radio/politis.jpg';
// $politisRadio->url='';
// $politisRadio->src='https://eco.onestreaming.com/proxy/politis/stream';


// $diesiRadio=new RadioStation();
// $diesiRadio->name='Diesi';
// $diesiRadio->logoUrl='/logos/radio/diesi.png';
// $diesiRadio->url='';
// $diesiRadio->src='http://r1.cloudskep.com/radio/diesi/icecast.audio';

// $protoRadio=new RadioStation();
// $protoRadio->name='Radio Proto';
// $protoRadio->logoUrl='/logos/radio/proto.jpg';
// $protoRadio->url='';
// $protoRadio->src='https://live3.istoikona.net:18191/stream';

// $superRadio=new RadioStation();
// $superRadio->name='Super';
// $superRadio->logoUrl='/logos/radio/super.jpg';
// $superRadio->url='';
// $superRadio->src='https://live3.istoikona.net:18826/stream';

// $kanali6Radio=new RadioStation();
// $kanali6Radio->name='Kanali 6';
// $kanali6Radio->logoUrl='/logos/radio/kanali6.jpg';
// $kanali6Radio->url='';
// $kanali6Radio->src='https://live3.istoikona.net:9802/kanali';

// $supersportRadio=new RadioStation();
// $supersportRadio->name='SuperSport FM';
// $supersportRadio->logoUrl='/logos/radio/supersport.png';
// $supersportRadio->url='';
// $supersportRadio->src='https://r1.cloudskep.com/radio3/supersportfm/icecast.audio';

// $energyRadio=new RadioStation();
// $energyRadio->name='Energy';
// $energyRadio->logoUrl='/logos/radio/energy.jpg';
// $energyRadio->url='';
// $energyRadio->src='https://onlineradiobox.com/json/cy/nrj/play?platform=web';

// $zenithRadio=new RadioStation();
// $zenithRadio->name='Zenith';
// $zenithRadio->logoUrl='/logos/radio/zenith.jpg';
// $zenithRadio->url='';
// $zenithRadio->src='https://onlineradiobox.com/json/cy/zenith/play?platform=web';

// $deejayRadio=new RadioStation();
// $deejayRadio->name='DeeJay';
// $deejayRadio->logoUrl='/logos/radio/deejay.jpg';
// $deejayRadio->url='';
// $deejayRadio->src='https://eradio.networksolutions.com.cy:1943/DeeJay/DeeJay.stream/playlist.m3u8';

// $kissfmRadio=new RadioStation();
// $kissfmRadio->name='Kiss FM';
// $kissfmRadio->logoUrl='/logos/radio/kiss.png';
// $kissfmRadio->src='https://securestreams3.autopo.st:1417/89FM';

// $kanali7Radio=new RadioStation();
// $kanali7Radio->name='Kanali 7';
// $kanali7Radio->logoUrl='/logos/radio/kanali7.png';
// $kanali7Radio->url='';
// $kanali7Radio->src='http://live.radioalphaomega.com:4012/;stream.mp3';

// $klikRadio=new RadioStation();
// $klikRadio->name='Klik FM';
// $klikRadio->logoUrl='/logos/radio/klik.png';
// $klikRadio->url='';
// $klikRadio->src='https://onlineradiobox.com/json/cy/klik/play?platform=web';

// $capitalRadio=new RadioStation();
// $capitalRadio->name='Capital';
// $capitalRadio->logoUrl='/logos/radio/capital.png';
// $capitalRadio->url='';
// $capitalRadio->src='https://live.webhosting4u.gr/capitalradiocy';

// $mixfmRadio=new RadioStation();
// $mixfmRadio->name='Mix FM';
// $mixfmRadio->logoUrl='/logos/radio/mix.jpg';
// $mixfmRadio->url='';
// $mixfmRadio->src='https://live3.istoikona.net:9706/stream';

// $radiopafosRadio=new RadioStation();
// $radiopafosRadio->name='Radio Pafos';
// $radiopafosRadio->logoUrl='/logos/radio/pafos.jpg';
// $radiopafosRadio->src='';
// $radiopafosRadio->src='http://live.iteam4media.com:1818/';

// $activeRadio=new RadioStation();
// $activeRadio->name='Active';
// $activeRadio->logoUrl='/logos/radio/active.jpg';
// $activeRadio->src='';
// $activeRadio->src='https://securestreams3.autopo.st:1417/active';

// $dromosfmRadio=new RadioStation();
// $dromosfmRadio->name='Dromos';
// $dromosfmRadio->logoUrl='/logos/radio/dromos.png';
// $dromosfmRadio->url='';
// $dromosfmRadio->src='https://dromoscyprus.live24.gr/dromoscyprus';

// $logosRadio=new RadioStation();
// $logosRadio->name='Alithinos Logos';
// $logosRadio->logoUrl='/logos/radio/logos.jpg';
// $logosRadio->url='';
// $logosRadio->src='http://r1.cloudskep.com/radio/agiosdemetrios/icecast.audio';

// $russianwaveRadio=new RadioStation();
// $russianwaveRadio->name='Russian Wave';
// $russianwaveRadio->logoUrl='/logos/radio/russianwave.png';
// $russianwaveRadio->url='';
// $russianwaveRadio->src='https://stream.radiojar.com/wy42n4wvdf9uv';

// $choicefmRadio=new RadioStation();
// $choicefmRadio->name='Choice FM';
// $choicefmRadio->logoUrl='/logos/radio/choice.jpg';
// $choicefmRadio->url='';
// $choicefmRadio->src='https://live3.istoikona.net:18364/stream';

// $njoyRadio=new RadioStation();
// $njoyRadio->name='Njoy';
// $njoyRadio->logoUrl='/logos/radio/njoy.jpg';
// $njoyRadio->url='';
// $njoyRadio->src='http://shout.kalsedia.com:9950/njoy9950_128http://';





// $radiostations=[$cybc1Radio,$cybc2Radio,$cybc3Radio,$cybc4Radio,$ant1Radio,
//                 $lovefmRadio,$astraRadio,$sferaRadio,$politisRadio,
//                 $diesiRadio,$protoRadio,$superRadio,$kanali6Radio,
//                 $supersportRadio,$energyRadio,$zenithRadio,$deejayRadio,
//                 $kissfmRadio,$kanali7Radio,$klikRadio,$capitalRadio,
//                 $mixfmRadio,$radiopafosRadio,$activeRadio,$dromosfmRadio,
//                 $logosRadio,$russianwaveRadio,$choicefmRadio,$njoyRadio];

// sort($radiostations);  






// //add id
// $n=-1;
// foreach ($tvstations as $tv){
//     $tv->type=1;
//     $tv->id=($n+1);
//     $n++;
// }

// $n=-1;
// foreach ($radiostations as $radio){

//     $radio->type=2;
//     $radio->id=($n+1);
//     $n++;
// }


// if(isset($_SESSION['favourites'])){    
//     $favouritesData= $_SESSION['favourites']['results'];    
    
//     $favourites=[];

//     foreach($favouritesData as $f){
//         //retrieve logo & url
//         if($f->type=='1'){
            
//             $logo=$tvstations[$f->favourite_fk]->logoUrl;
//             $src=$tvstations[$f->favourite_fk]->src;
//             $name=$tvstations[$f->favourite_fk]->name;
//         }
//         else{
            
//             $logo=$radiostations[$f->favourite_fk]->logoUrl;
//             $src=$radiostations[$f->favourite_fk]->src;
//             $name=$radiostations[$f->favourite_fk]->name;
//         }

//         $data=['favourite_fk'=>$f->favourite_fk,'type'=>$f->type,'name'=>$name,'logo'=>$logo,'src'=>$src];

//         array_push($favourites,$data);                
//     }

//      $favourites=json_encode($favourites);
    
    
    
// }
// else{
//    $favourites='[]';
//    $favourites=json_encode($favourites);
// }


?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Home</title>        
    </head>

    <x-header />
    
    

    <Transition>
        <div v-if='selectedStation!=""'>
            <x-player  />
        </div>
    </Transition>
    
        
    
    
    
    <span v-if='selectedStation==""'>
        <div class='container top1'>
        
            <body class='container'>
                <div class='row'>
                    <button class='btn col border' @click='menu(1)'>
                        <span v-if='menuSelection!="1"' class="col-12 material-symbols-outlined">tv_gen</span>
                        <span v-if='menuSelection!="1"' class="col-12">TV</span>
                        <span v-if='menuSelection=="1"' class="selected col-12 material-symbols-outlined">tv_gen</span>
                        <span v-if='menuSelection=="1"' class="col-12 selected2">TV</span>
                    </button>
                    <button class='btn col border' @click='menu(2)'>
                        <span v-if='menuSelection!="2"' class="col-12 material-symbols-outlined">radio</span>
                        <span v-if='menuSelection!="2"' class="col-12">Radio</span>
                        <span v-if='menuSelection=="2"' class="selected col-12 material-symbols-outlined">radio</span>
                        <span v-if='menuSelection=="2"' class="col-12 selected2">Radio</span>
                    </button>
                    <button class='btn col border' @click='menu(3)' >
                        <span v-if='menuSelection!="3"' class="col-12 fas fa-star"></span>
                        <span v-if='menuSelection!="3"'>Favourites</span>                    
                        <span v-if='menuSelection=="3"' class="selected col-12 fas fa-star"></span>
                        <span v-if='menuSelection=="3"' class='selected2'>Favourites</span>                                            
                    </button>                                
                </div>
                
            </body>
            
        </div>
        
        <!-- @if (isset($_GET['station']))
            {{$_GET['station']}}
        @endif -->
        
        
        <transition name="fade">
            <div v-if='menuSelection==1' class='main'>
            @foreach ($tvstations as $tv)
        
                <div class='row border top1'>
                
                    <button class='btn col-12 col-md centre border' @click='play("{{$tv->id}}","{{$tv->type}}", "{{$tv->name}}","{{$tv->logoUrl}}","{{$tv->src}}")'>
                        
                        <img class='border  img-fluid  logo  left1' src="{{$tv->logoUrl}}" alt="{{$tv->name}}">
                        
                    </button>
                    
                    <div class='col-12 col-md centre border margin-v-auto'>
                        {{$tv->name}} 
                    </div>
                
                </div>    
            @endforeach
            </div> 
        </transition > 
        


        <transition name='fade'>
            <div v-if='menuSelection==2'>
            @foreach ($radiostations as $radio)
        
            <div class='row border top1'>            
                <button class='btn col-12 col-md centre border' @click='play("{{$radio->id}}","{{$radio->type}}","{{$radio->name}}","{{$radio->logoUrl}}","{{$radio->src}}")'>                    
                    <img class='border  img-fluid  logo  left1' src="{{$radio->logoUrl}}" alt="{{$radio->name}}">                    
                </button>

                <div class='col-12 col-md centre border margin-v-auto'>
                    {{$radio->name}} 
                </div>
            
            </div>    
             @endforeach
            </div>  
        </transition>  

        <transition name='fade'>

            <div class='top1' v-if='menuSelection==3'>
                
                <div class='row'>
                    <div class='col-12'>
                        <button @click='filterFavourites(1)'  class='btn'>
                            <span v-if='favouritesFilter!=1'>All</span>
                            <span v-if='favouritesFilter==1' class='selected2'><u>All</u></span>
                        </button>
                        
        
                        <button @click='filterFavourites(2)'   class='btn'>
                            <span v-if='favouritesFilter!=2'>TV</span>
                            <span v-if='favouritesFilter==2' class='selected2'><u>TV</u></span>
                        </button>
                        
        
                        <button @click='filterFavourites(3)'  class='btn'>
                            <span v-if='favouritesFilter!=3'>Radio</span>
                            <span v-if='favouritesFilter==3' class='selected2'><u>Radio</u></span>
                        </button> 
                    </div >
                </div >     
                
                 <!-- display favourites based on filter -->
                <div v-for='(favourite,index) in favourites'>
                    
                    <div class='row border top1'>            
                        <button class='btn col-12 col-md centre border' @click='play(favourite.favourite_fk,favourite.type,favourite.name,favourite.logo,favourite.src)'  >                    
                            <img class='border  img-fluid  logo  left1' :src="favourite.logo" :alt="favourite.name">                    
                        </button> 
                    
                    <div class='col-12 col-md centre border margin-v-auto'>
                        @{{favourite.name}}
                    </div>

                </div>
                 

            </div>
            </div>             
        </transition>  
 
    </span>
        
    

    

    <script src="js/header.js"></script>   
    <script src="js/app.js"></script>   
</html>

</div>