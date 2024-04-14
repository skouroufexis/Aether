<?php 

class TvStation{

    public $type; //tv or radio station 1 = tv 2 = radio
    public $name;
    public $logoUrl;
    public $id;
    public $url;
    public $src;

}

class RadioStation{
    public $type; //tv or radio station 1 = tv 2 = radio
    public $name;
    public $logoUrl;
    public $id;
    public $url;
    public $src;
}

//create tv station objects
$cybc1=new TvStation();
$cybc1->name='CyBC 1';
$cybc1->logoUrl='/logos/tv/cybc1.png';
$cybc1->url='http://cybc.com.cy/live-tv/ρικ-1/';
$cybc1->src='https://l6.cloudskep.com/rikcy/rik1/playlist.m3u8';



$cybc2=new TvStation();
$cybc2->name='CyBC 2';
$cybc2->logoUrl='/logos/tv/cybc2.png';
$cybc2->url='http://cybc.com.cy/live-tv/ρικ-2/';
$cybc2->src='https://l6.cloudskep.com/rikcy/rik2/playlist.m3u8';

$cybchd=new TvStation();
$cybchd->name='CyBC HD';
$cybchd->logoUrl='/logos/tv/cybchd.png';
$cybchd->url='http://cybc.com.cy/live-tv/ρικ-hd/';
$cybchd->src='https://l6.cloudskep.com/rikcy/rikhd/playlist.m3u8';

$cybcs=new TvStation();
$cybcs->name='CyBC SAT';
$cybcs->logoUrl='/logos/tv/cybcs.png';
$cybcs->url='http://cybc.com.cy/live-tv/ρικ-sat/';
$cybcs->src='https://l3.cloudskep.com/cybcsat/abr/playlist.m3u8';


$alpha=new TvStation();
$alpha->name='Alpha';
$alpha->logoUrl='/logos/tv/alpha.png';
$alpha->url='https://www.alphacyprus.com.cy/live';
$alpha->src='https://l4.cloudskep.com/alphacyp/acy/playlist.m3u8';

$ant1=new TvStation();
$ant1->name='ANT1';
$ant1->logoUrl='/logos/tv/ant1.png';
$ant1->url='https://www.ant1live.com/webtv/live';
$ant1->src='https://l2.cloudskep.com/ant1cm2/abr/playlist.m3u8';

$sigma=new TvStation();
$sigma->name='Sigma';
$sigma->logoUrl='/logos/tv/sigma.png';
$sigma->url='https://www.sigmatv.com/live';
$sigma->src='https://l10.cloudskep.com/sigmatv/stv/playlist.m3u8';

$omega=new TvStation();
$omega->name='Omega';
$omega->logoUrl='/logos/tv/omega.png';
$omega->url='http://www.omegatv.com.cy/live/';
$omega->src='https://l1.cloudskep.com/tst/omcy/playlist.m3u8';



$tvstations=[$cybc1,$cybc2,$cybchd,$cybcs,$alpha,$ant1,$sigma,$omega];
sort($tvstations);



//create radio station objects
$cybc1Radio = new RadioStation();
$cybc1Radio->name='CyBC 1 Radio';
$cybc1Radio->logoUrl='/logos/radio/cybc1.png';
$cybc1Radio->url='';
$cybc1Radio->src='https://r1.cloudskep.com/cybcr/cybc1/iplaylist.m3u8';


$cybc2Radio = new RadioStation();
$cybc2Radio->name='CyBC 2 Radio';
$cybc2Radio->logoUrl='/logos/radio/cybc2.png';
$cybc2Radio->url='';
$cybc2Radio->src='https://r1.cloudskep.com/cybcr/cybc2/iplaylist.m3u8';


$cybc3Radio = new RadioStation();
$cybc3Radio->name='CyBC 3 Radio';
$cybc3Radio->logoUrl='/logos/radio/cybc3.png';
$cybc3Radio->url='';
$cybc3Radio->src='https://r1.cloudskep.com/cybcr/cybc3/iplaylist.m3u8';


$cybc4Radio = new RadioStation();
$cybc4Radio->name='CyBC 4 Radio';
$cybc4Radio->logoUrl='/logos/radio/cybc4.png';
$cybc4Radio->url='';
$cybc4Radio->src='https://r1.cloudskep.com/cybcr/cybc4/iplaylist.m3u8';



$ant1Radio=new RadioStation();
$ant1Radio->name='ANT1 Radio';
$ant1Radio->logoUrl='/logos/radio/ant1.jpg';
$ant1Radio->url='';
$ant1Radio->src='https://r1.cloudskep.com/radio2/ant1fm/icecast.audio';


$lovefmRadio=new RadioStation();
$lovefmRadio->name='Love FM';
$lovefmRadio->logoUrl='/logos/radio/love.jpg';
$lovefmRadio->url='';
$lovefmRadio->src='http://eradio.networksolutions.com.cy:1935/LoveRadio/Loveradio.stream/playlist.m3u8';


$astraRadio=new RadioStation();
$astraRadio->name='Astra';
$astraRadio->logoUrl='/logos/radio/astra.png';
$astraRadio->url='';
$astraRadio->src='https://securestreams2.autopo.st:1106/stream';

$sferaRadio=new RadioStation();
$sferaRadio->name='Sfera';
$sferaRadio->logoUrl='/logos/radio/sfera.png';
$sferaRadio->url='';
$sferaRadio->src='https://securestreams3.autopo.st:1417/sfera';


$politisRadio=new RadioStation();
$politisRadio->name='Politis';
$politisRadio->logoUrl='/logos/radio/politis.jpg';
$politisRadio->url='';
$politisRadio->src='https://eco.onestreaming.com/proxy/politis/stream';


$diesiRadio=new RadioStation();
$diesiRadio->name='Diesi';
$diesiRadio->logoUrl='/logos/radio/diesi.png';
$diesiRadio->url='';
$diesiRadio->src='http://r1.cloudskep.com/radio/diesi/icecast.audio';

$protoRadio=new RadioStation();
$protoRadio->name='Radio Proto';
$protoRadio->logoUrl='/logos/radio/proto.jpg';
$protoRadio->url='';
$protoRadio->src='https://live3.istoikona.net:18191/stream';

$superRadio=new RadioStation();
$superRadio->name='Super';
$superRadio->logoUrl='/logos/radio/super.jpg';
$superRadio->url='';
$superRadio->src='https://live3.istoikona.net:18826/stream';

$kanali6Radio=new RadioStation();
$kanali6Radio->name='Kanali 6';
$kanali6Radio->logoUrl='/logos/radio/kanali6.jpg';
$kanali6Radio->url='';
$kanali6Radio->src='https://live3.istoikona.net:9802/kanali';

$supersportRadio=new RadioStation();
$supersportRadio->name='SuperSport FM';
$supersportRadio->logoUrl='/logos/radio/supersport.png';
$supersportRadio->url='';
$supersportRadio->src='https://r1.cloudskep.com/radio3/supersportfm/icecast.audio';

$energyRadio=new RadioStation();
$energyRadio->name='Energy';
$energyRadio->logoUrl='/logos/radio/energy.jpg';
$energyRadio->url='';
$energyRadio->src='https://onlineradiobox.com/json/cy/nrj/play?platform=web';

$zenithRadio=new RadioStation();
$zenithRadio->name='Zenith';
$zenithRadio->logoUrl='/logos/radio/zenith.jpg';
$zenithRadio->url='';
$zenithRadio->src='https://onlineradiobox.com/json/cy/zenith/play?platform=web';

$deejayRadio=new RadioStation();
$deejayRadio->name='DeeJay';
$deejayRadio->logoUrl='/logos/radio/deejay.jpg';
$deejayRadio->url='';
$deejayRadio->src='https://eradio.networksolutions.com.cy:1943/DeeJay/DeeJay.stream/playlist.m3u8';

$kissfmRadio=new RadioStation();
$kissfmRadio->name='Kiss FM';
$kissfmRadio->logoUrl='/logos/radio/kiss.png';
$kissfmRadio->src='https://securestreams3.autopo.st:1417/89FM';

$kanali7Radio=new RadioStation();
$kanali7Radio->name='Kanali 7';
$kanali7Radio->logoUrl='/logos/radio/kanali7.png';
$kanali7Radio->url='';
$kanali7Radio->src='http://live.radioalphaomega.com:4012/;stream.mp3';

$klikRadio=new RadioStation();
$klikRadio->name='Klik FM';
$klikRadio->logoUrl='/logos/radio/klik.png';
$klikRadio->url='';
$klikRadio->src='https://onlineradiobox.com/json/cy/klik/play?platform=web';

$capitalRadio=new RadioStation();
$capitalRadio->name='Capital';
$capitalRadio->logoUrl='/logos/radio/capital.png';
$capitalRadio->url='';
$capitalRadio->src='https://live.webhosting4u.gr/capitalradiocy';

$mixfmRadio=new RadioStation();
$mixfmRadio->name='Mix FM';
$mixfmRadio->logoUrl='/logos/radio/mix.jpg';
$mixfmRadio->url='';
$mixfmRadio->src='https://live3.istoikona.net:9706/stream';

$radiopafosRadio=new RadioStation();
$radiopafosRadio->name='Radio Pafos';
$radiopafosRadio->logoUrl='/logos/radio/pafos.jpg';
$radiopafosRadio->src='';
$radiopafosRadio->src='http://live.iteam4media.com:1818/';

$activeRadio=new RadioStation();
$activeRadio->name='Active';
$activeRadio->logoUrl='/logos/radio/active.jpg';
$activeRadio->src='';
$activeRadio->src='https://securestreams3.autopo.st:1417/active';

$dromosfmRadio=new RadioStation();
$dromosfmRadio->name='Dromos';
$dromosfmRadio->logoUrl='/logos/radio/dromos.png';
$dromosfmRadio->url='';
$dromosfmRadio->src='https://dromoscyprus.live24.gr/dromoscyprus';

$logosRadio=new RadioStation();
$logosRadio->name='Alithinos Logos';
$logosRadio->logoUrl='/logos/radio/logos.jpg';
$logosRadio->url='';
$logosRadio->src='http://r1.cloudskep.com/radio/agiosdemetrios/icecast.audio';

$russianwaveRadio=new RadioStation();
$russianwaveRadio->name='Russian Wave';
$russianwaveRadio->logoUrl='/logos/radio/russianwave.png';
$russianwaveRadio->url='';
$russianwaveRadio->src='https://stream.radiojar.com/wy42n4wvdf9uv';

$choicefmRadio=new RadioStation();
$choicefmRadio->name='Choice FM';
$choicefmRadio->logoUrl='/logos/radio/choice.jpg';
$choicefmRadio->url='';
$choicefmRadio->src='https://live3.istoikona.net:18364/stream';

$njoyRadio=new RadioStation();
$njoyRadio->name='Njoy';
$njoyRadio->logoUrl='/logos/radio/njoy.jpg';
$njoyRadio->url='';
$njoyRadio->src='http://shout.kalsedia.com:9950/njoy9950_128http://';





$radiostations=[$cybc1Radio,$cybc2Radio,$cybc3Radio,$cybc4Radio,$ant1Radio,
                $lovefmRadio,$astraRadio,$sferaRadio,$politisRadio,
                $diesiRadio,$protoRadio,$superRadio,$kanali6Radio,
                $supersportRadio,$energyRadio,$zenithRadio,$deejayRadio,
                $kissfmRadio,$kanali7Radio,$klikRadio,$capitalRadio,
                $mixfmRadio,$radiopafosRadio,$activeRadio,$dromosfmRadio,
                $logosRadio,$russianwaveRadio,$choicefmRadio,$njoyRadio];

sort($radiostations);  






//add id
$n=-1;
foreach ($tvstations as $tv){
    $tv->type=1;
    $tv->id=($n+1);
    $n++;
}

$n=-1;
foreach ($radiostations as $radio){

    $radio->type=2;
    $radio->id=($n+1);
    $n++;
}

?>