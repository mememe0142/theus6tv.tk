<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="TeLaSe">
      <title>WebTV IPTV Player</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
        <script type="text/javascript" src="dist/clappr.min.js"></script>
        <script type="text/javascript" src="dist/hlsjs-playback.min.js"></script>
        <script type="text/javascript" src="dist/playback.min.js"></script>		
        <script type="text/javascript" src="latest/clappr-chromecast-plugin.min.js"></script>
        <script type="text/javascript" src="dist/level-selector.min.js"></script>
        <script type="text/javascript" src="clappr-ads/ads.js"></script>
		<script type="text/javascript" src="dist/clappr.min/video.js"></script>
        <script type="text/javascript" src="js/player-error.js"></script>
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp;
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
		 <h5><a href="index.php">TeLaSe WebTV IPTV Player<span class="logo_colour"></span></a></h5>
         <!--<a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="" src="img/logo.png"></a>-->
          <!--Navbar Search -->
         <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-10 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control search" onkeyup="bait(this)" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light sort" type="button">
                  <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </div>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-10 osahan-right-navbar">
            <li class="nav-item mx-1">
            </li>
         </ul>
      </nav>
      <div id="wrapper">
          <div id="lists">
         <!-- Sidebar -->
         <ul id="list" class="sidebar navbar-nav list">
		 		 <li class="nav-item">
               <a class="channel nav-link" data-value="http://iptvde.mypressonline.com/" href=http://iptvde.mypressonline.com/>BACK</a>
            </li>
		       <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveanevia.mncnow.id/live/eds/Cbeebies/sa_hls/Cbeebies.m3u8" href="javascript:void(0);">24/7 Cbeebies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://1301485333.rsc.cdn77.org/1301485333/tracks-v1a1/mono.m3u8" href="javascript:void(0);">24/7 Fix & Foxi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnyellowspot.teleosmedia.com/stream/yellowspot/super-geek-heros/seglist_720p.m3u8?fluxustv.m3u8" href="javascript:void(0);">24/7 Super Geek Heroes</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.ecable.tv/afrobeats/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Afrobeats</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://84.22.33.254/unicast.amc/index.m3u8" href="javascript:void(0);">AMC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://95.170.215.118/hls/m3u8/Animal-Planet.m3u8" href="javascript:void(0);">Animal Planet</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://contributionstreams.ashttp9.visionip.tv/live/visiontv-contributionstreams-arise-tv-hsslive-25f-16x9-SD/chunklist.m3u8" href="javascript:void(0);">Arise News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.ecable.tv/asstv/tracks-v1a1/mono.m3u8" href="javascript:void(0);">AsSalt TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge-1192-ch-gv.filmon.com/live/27.low.stream/playlist.m3u8" href="javascript:void(0);">BBC News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://anevia114.mncnow.id/live/eds/BeIN1/sa_hls/BeIN1-avc1_2499968=11-BeIN1-mp4a_98800_eng=3.m3u8" href="javascript:void(0);">beIN Sports 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://anevia114.mncnow.id/live/eds/BeIN2/sa_hls/BeIN2-avc1_2499968=10-BeIN2-mp4a_98800_eng=5.m3u8" href="javascript:void(0);">beIN Sports 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn-videos.akamaized.net/btv/desktop/akamai/europe/live/primary.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh3.tvanywhere.ae/hls/boomerang/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Boomerang</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,boxhits-desktop.m3u8?yo.up=http%3a%2f%2fboxtv-origin-elb.cds1.yospace.com%2fuploads%2fboxhits%2f" href="javascript:void(0);">Box Hits</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=186&f=.m3u8" href="javascript:void(0);">Box Nation</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/IdHTuehZQPClis-gJaZkFQ/master.m3u8" href="javascript:void(0);">BritCom</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/btsport1.m3u8" href="javascript:void(0);">BT Sport 1 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream8.com/hls/btsport1.m3u8" href="javascript:void(0);">BT Sport 1 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://sportbar.biz/lba/123/g3/ukbt2sport.m3u8?fluxustv.m3u8" href="javascript:void(0);">BT Sport 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream8.com/hls/btsport2.m3u8" href="javascript:void(0);">BT Sport 2 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://sportbar.biz/lba/123/g7/btse.m3u8?fluxustv.m3u8" href="javascript:void(0);">BT Sport ESPN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://king365-tv.com/leblanc/leblanc/1936" href="javascript:void(0);">CBS Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://king365-tv.com/leblanc/leblanc/1937" href="javascript:void(0);">CBS Reality</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.cgtn.com/cctv-d.m3u8?fluxustv.m3u8" href="javascript:void(0);">CGTN Documentary (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livefr.cgtn.com/1000d/prog_index.m3u8" href="javascript:void(0);">CGTN Documentary (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ott-cdn.ucom.am/s65/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">CNBC Europe</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live-craftuk.simplestreamcdn.com/craftuk/3/prog_index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Create and Craft</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/cruise_tv/hls_video/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cruise1st TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://185.176.117.243/live/eds/Disney_XD/HLS_encr/Disney_XD.m3u8" href="javascript:void(0);">Disney XD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://jiocgehub.jio.ril.com/Dsports_HD/Dsports_HD.m3u8?fluxustv.m3u8" href="javascript:void(0);">DSport</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh3.tvanywhere.ae/hls/duck/index.m3u8" href="javascript:void(0);">Duck TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ott-cdn.ucom.am/s37/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">English Club TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://95.170.215.118/hls/m3u8/EURO-Sport-1.m3u8" href="javascript:void(0);">Eurosport 1 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/eurosport1.m3u8" href="javascript:void(0);">Eurosport 1 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://95.170.215.118/hls/m3u8/EURO-Sport-2.m3u8" href="javascript:void(0);">Eurosport 2 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/eurosport2.m3u8" href="javascript:void(0);">Eurosport 2 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://45.126.83.51/uq2663/h/h05/index2.m3u8" href="javascript:void(0);">Fight Sports (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveanevia.mncnow.id/live/eds/FightSports/sa_hls/FightSports-avc1_2499968=10-mp4a_98800_eng=5.m3u8" href="javascript:void(0);">Fight Sports (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://95.86.32.7:999/food" href="javascript:void(0);">Food Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://45.58.62.92:8080" href="javascript:void(0);">Fox Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://57d6b85685bb8.streamlock.net/abrgemporiaukgfx/livestream_source/chunklist.m3u8" href="javascript:void(0);">Gemporia (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://57d6b85685bb8.streamlock.net:1935/abrgemporiaukgfx/livestream_360p/index.m3u8" href="javascript:void(0);">Gemporia (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh1.tvanywhere.ae:80/hls/h2/index.m3u8" href="javascript:void(0);">H2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://e0e83836-f421-e353-7cd1-22710669e09f-fs-chf02-06.cdn.arqiva-ott-live.com/live-audio_track=64000-video=1100000.m3u8" href="javascript:void(0);">High Street TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22705/+0000/hi/c.m3u8" href="javascript:void(0);">Horizon Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-isd.simplestreamcdn.com/idealworld/3/prog_index.m3u8" href="javascript:void(0);">Ideal World (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-isd.simplestreamcdn.com/idealworld/1/prog_index.m3u8" href="javascript:void(0);">Ideal World (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-isd.simplestreamcdn.com/idealworld/2/prog_index.m3u8" href="javascript:void(0);">Ideal World (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://jiocgwhub.jio.ril.com/Insight/Insight.m3u8" href="javascript:void(0);">Insight</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge01.cdn.aws.subset.host/JewelleryMakerLive/JewelleryMakerLive/playlist.m3u8" href="javascript:void(0);">Jewellery Maker</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ms-azure-video.gslb.startimestv.com/live/JIMJAM_890_500_480x360_194010/playlist.m3u8" href="javascript:void(0);">JimJam</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://streamingserver001.viewtvgroup.com:80/kapanglocal-playout-master/tracks-v1a1/mono.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kapang TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://streamingserver001.viewtvgroup.com:80/kapanglocal-playout-master/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kapang TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver003.viewtvgroup.com:443/kapanglocal-playout-master/index.m3u8" href="javascript:void(0);">Kapang TV (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver003.viewtvgroup.com/kapanglocal-playout-master/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Kapang TV (Opt-4)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://w10.streamgb.com:1935/kool/kool/playlist.m3u8" href="javascript:void(0);">Kool London Radio</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=57&f=.m3u8" href="javascript:void(0);">La Liga TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://1043115116.rsc.cdn77.org/LS-PRG-54819-1/index.m3u8" href="javascript:void(0);">Mafa Shortfilm (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://1043115116.rsc.cdn77.org/LS-PRG-54819-1/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Mafa Shortfilm (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://45.58.62.92:8084" href="javascript:void(0);">Motorsport TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh1.tvanywhere.ae:80/hls/nat_geo_people/index.m3u8" href="javascript:void(0);">Nat Geo People</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://103.199.160.85/Content/insync/Live/Channel(Insync)" href="javascript:void(0);">Nat Geo Wild (Asia)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh1.tvanywhere.ae/hls/nat_geo_wild/index.m3u8" href="javascript:void(0);">Nat Geo Wild (MENA)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh1.tvanywhere.ae/hls/nat_geo/index.m3u8" href="javascript:void(0);">National Geographic</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveanevia.mncnow.id/live/eds/NickJr/sa_hls/NickJr.m3u8" href="javascript:void(0);">Nick Jr.</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ms-azure-video.gslb.startimestv.com/live/NICKELODEON_836_250_320x240_191618/playlist.m3u8" href="javascript:void(0);">Nickelodeon</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver002.viewtvgroup.com/kapanglivetv-playout-onlymotors/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Only Motors</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver001.viewtvgroup.com/kapanglivetv-uksat-pick/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Pick</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver001.viewtvgroup.com/kapanglivetv-uksat-pop/tracks-v1a1/mono.m3u8?fluxustv.m3u8" href="javascript:void(0);">Pop</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://57d4d8b1e4f4f.streamlock.net/primalcure/livestream/chunklist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Primal Living TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_main_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://llnw.live.qvc.simplestream.com/hera/remote/qvcuk_primary_sdi1/live.m3u8" href="javascript:void(0);">QVC +1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_beauty_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC Beauty</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_extra_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC Extra</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_style_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC Style</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://1586823379.rsc.cdn77.org/1586823379/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Reel PX Action</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://1427531085.rsc.cdn77.org/1427531085/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Reel PX Comedy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://1294836789.rsc.cdn77.org/1294836789/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Reel PX Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://1002631743.rsc.cdn77.org/1002631743/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Reel PX Unlimited</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://1946514655.rsc.cdn77.org/1946514655/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Reel PX Vintage</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://220.158.149.28:8180/live/TV00000000000000000034@HHZT" href="javascript:void(0);">Reuters</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://84.22.33.254/unicast.scifi/index.m3u8" href="javascript:void(0);">SciFi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tv.sheffieldlive.org/hls/main.m3u8" href="javascript:void(0);">Sheffield Live! 93.2 FM</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=477&f=.m3u8" href="javascript:void(0);">Sky Cinema Action</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=481&f=.m3u8" href="javascript:void(0);">Sky Cinema Adventure</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=478&f=.m3u8" href="javascript:void(0);">Sky Cinema Comedy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=479&f=.m3u8" href="javascript:void(0);">Sky Cinema Disney</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=482&f=.m3u8" href="javascript:void(0);">Sky Cinema Greats</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=484&f=.m3u8" href="javascript:void(0);">Sky Cinema Premier</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=485&f=.m3u8" href="javascript:void(0);">Sky Cinema Sci-fi Horror</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=486&f=.m3u8" href="javascript:void(0);">Sky Cinema Thriller</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=480&f=.m3u8" href="javascript:void(0);">Sky Cinema Valentine</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://skydvn-nowtv-atv-prod.skydvn.com/atv/skynews/1404/live/05.m3u8" href="javascript:void(0);">Sky News (HD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ax.micaesoft.com/YMitv/YMITV_UK_UKskytv_2.m3u8?fluxustv.m3u8" href="javascript:void(0);">Sky News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ax.micaesoft.com/YMitv/YMITV_US_USnasatv_1.m3u8?fluxustv.m3u8" href="javascript:void(0);">Sky News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://skydvn-nowtv-atv-prod.skydvn.com/atv/skynews/1404/live/04.m3u8" href="javascript:void(0);">Sky News (SD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/skysportsaction.m3u8" href="javascript:void(0);">Sky Sports Action (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream8.com/hls/skysportsaction.m3u8" href="javascript:void(0);">Sky Sports Action (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=187&f=.m3u8" href="javascript:void(0);">Sky Sports Action (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/skysportsarena.m3u8" href="javascript:void(0);">Sky Sports Arena</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/skysports5.m3u8" href="javascript:void(0);">Sky Sports Cricket (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=476&f=.m3u8" href="javascript:void(0);">Sky Sports Cricket (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=188&f=.m3u8" href="javascript:void(0);">Sky Sports F1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cstream9.com/hls/skysportsgolf.m3u8" href="javascript:void(0);">Sky Sports Golf (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=189&f=.m3u8" href="javascript:void(0);">Sky Sports Golf (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/skysports1.m3u8" href="javascript:void(0);">Sky Sports Main Event</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=191&f=.m3u8" href="javascript:void(0);">Sky Sports Mix</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cstream9.com/hls/skysports3.m3u8" href="javascript:void(0);">Sky Sports Premier League (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=190&f=.m3u8" href="javascript:void(0);">Sky Sports Premier League (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=192&f=.m3u8" href="javascript:void(0);">Sky Sports Premier League (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcndstv.teleosmedia.com/stream/dstv/sunburn/seglist_720p.m3u8" href="javascript:void(0);">Sunburn TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn.mobibase.com/hls/733/258_5000k/playlist.m3u8" href="javascript:void(0);">Superyacht TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22706/+0000/hi/c.m3u8" href="javascript:void(0);">The Boat Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,thebox-desktop.m3u8?yo.up=http://boxtv-origin-elb.cds1.yospace.com/uploads/thebox/" href="javascript:void(0);">The Box</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live-tjc.simplestreamcdn.com/tjc_sdi1/2/prog_index.m3u8" href="javascript:void(0);">The Jewellery Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2ktlibtvvj8vp.cloudfront.net/trace_sportsstars/4/prog_index.m3u8" href="javascript:void(0);">Trace Sports Stars (No-Audio)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver001.viewtvgroup.com/local-test2/tracks-v1a1/mono.m3u8" href="javascript:void(0);">View TV Berkshire</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streamingserver002.viewtvgroup.com/kapanglivetv-playout-vintagemusictv/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Vintage Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://109.231.229.37:3401/voxafuk/voxafhlsout/chunklist_w985073329.m3u8?fluxustv.m3u8" href="javascript:void(0);">VoxAfrica UK</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22723/+0000/hi/c.m3u8" href="javascript:void(0);">World of Free Sports</a>
            </li>
         </ul>
         </div>
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="top-mobile-search">
                  <div class="row">
                     <div class="col-md-12">
                        <form class="mobile-search">
                           <div class="input-group">
                             <input type="text" placeholder="Search for..." class="form-control">
                               <div class="input-group-append">
                                 <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                               </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-12">
                            <div id="TeLaSe"></div>
                            <script>
                                var playerElement = document.getElementById("TeLaSe");
                                var player = new Clappr.Player({
                                    source: "https://tv-trt1.live.trt.com.tr/master.m3u8",
                                    //mimeType: 'application/x-mpegURL',
                                    //mimeType: 'video/x-matroska',									
									//mimeType: 'application/vdn.apple.mpegurl',
									//mimeType: 'application/octet-stream',
									//mimeType: 'application/x-www-form-urlencoded',									
                                    width: '100%',
                                    height: 'calc(100vh - 100px)',
                                    autoPlay: false,
                                    mediacontrol: {seekbar: "#00FF00", buttons: "#FFFFFF"},
                                    mute: false,
                                    gaAccount: "UA-69771681-1",
                                    disableErrorScreen: true, // Disable the internal error screen plugin
                                    plugins: [ChromecastPlugin,ErrorPlugin,LevelSelector,ClapprAds,HlsjsPlayback],
                                    chromecast: {
                                        appId: "9DFB77C0",
                                        contentType: "video/m3u8",
										contentType: "video/mp2t",
										contentType: "video/mp4",
										contentType: "video/mkv",
										contentType: "video/matroska",
										contentType: "video/hls",
                                        media: {
                                            type: ChromecastPlugin.None,
                                            title: "IPTV",
                                            subtitle: "IPTV Streaming Service"
                                        }
                                    },
                                    errorPlugin: {
                                        onRetry: function(e) {
                                        }
                                      },
                                    ads: {
                                        preRoll: {
                                            src: 'https://raw.githubusercontent.com/telase/PRO/master/vids/flash.mp4',
                                            skip: true,
                                            timeout: 3,
                                            link: ''
                                        },
                                        text: {
                                            wait: 'Wait % seconds...',
                                            skip: 'Skip >>>'
                                        }
                                    },
                                    disableVideoTagContextMenu: true,
                                    playbackNotSupportedMessage: 'Your browser is not supported.'
                                });
                                player.attachTo(playerElement);
                            </script>
                     </div>
                  </div>
               </div>
               <hr class="mt-0">
            </div>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <script src="libs/list.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>
</html>
