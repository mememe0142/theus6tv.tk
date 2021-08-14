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
			<li class="nav-item">
               <a class="channel nav-link" data-value="https://y5w8j4a9.ssl.hwcdn.net/andflixhd/tracks-v1a1/index.m3u8" href="javascript:void(0);">FlixHD</a>
            </li>
		    <li class="nav-item">
               <a class="channel nav-link" data-value="http://247retrotv.com:1935/live/smil:247retro.smil/playlist.m3u8" href="javascript:void(0);">24-7 Retro TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/music.m3u8?fluxustv.m3u8" href="javascript:void(0);">30A Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/my999.m3u8?fluxustv.m3u8" href="javascript:void(0);">30A TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=195&f=.m3u8" href="javascript:void(0);">A&E</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=197&f=.m3u8" href="javascript:void(0);">ABC (KTRK)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=199&f=.m3u8" href="javascript:void(0);">ABC (WFTS)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=205&f=.m3u8" href="javascript:void(0);">ABC (WFTV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://190.80.3.28/ABC/ABC.isml/index.m3u8" href="javascript:void(0);">ABC (WPLG) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=196&f=.m3u8" href="javascript:void(0);">ABC (WPLG) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=198&f=.m3u8" href="javascript:void(0);">ABC (WSB)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=202&f=.m3u8" href="javascript:void(0);">ABC (WWSB)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/3324f2467c414329b3b0cc5cd987b6be.m3u8" href="javascript:void(0);">ABC News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=206&f=.m3u8" href="javascript:void(0);">ABC News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/acc.m3u8" href="javascript:void(0);">ACC Network (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=207&f=.m3u8" href="javascript:void(0);">ACC Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-ch19-mcmedia.cablecast.tv/live/CELL-496k-270p/CELL-496k-270p.m3u8" href="javascript:void(0);">Access 19 Montgomery</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/actionsportstv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Action Sports 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-adventuresportsnetwork/CDN/768x432_1200000/index.m3u8" href="javascript:void(0);">Adventure Sports Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://akaku.vod.castus.tv/live/ch1.m3u8" href="javascript:void(0);">Akaku 53 Hawaii</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://akaku.vod.castus.tv/live/ch2.m3u8" href="javascript:void(0);">Akaku 54 Hawaii</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://akaku.vod.castus.tv/live/ch3.m3u8" href="javascript:void(0);">Akaku 55 Hawaii</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://video.blivenyc.com/broadcast/prod/2061/22/file-3192k.m3u8" href="javascript:void(0);">AKC TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=208&f=.m3u8" href="javascript:void(0);">AMC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-americasfunniesthomevideos/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">America's Funniest Videos</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/americanclassictv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">American Classic TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=209&f=.m3u8" href="javascript:void(0);">American Heroes Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://170.178.189.66:1935/live/Stream1/playlist.m3u8" href="javascript:void(0);">American Horrors</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-2.streamhoster.com/pl_138/201660-1270634-1/playlist.m3u8" href="javascript:void(0);">AMG TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=210&f=.m3u8" href="javascript:void(0);">Animal Planet</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live-aac.cablecast.tv/live/WIFI-1296k-540p/WIFI-1296k-540p.m3u8" href="javascript:void(0);">Anne Arundel TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/17.2/640x480?start_time=2019-12-11T20%3A45%3A00.000Z&end_time=2033&env=prd&uid=29375" href="javascript:void(0);">Antenna TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/applesaucetv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Apple Sauce Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus12-a.akamaihd.net/azleg/G0247_012/chunklist.m3u8" href="javascript:void(0);">Arizona Capitol TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/ACVBHD/chucklist.m3u8" href="javascript:void(0);">Atlanta Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://203.154.243.89:11739" href="javascript:void(0);">ATP Tennis TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-auftv/index.m3u8" href="javascript:void(0);">AUF TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/11328309/events/live/live.m3u8" href="javascript:void(0);">Augusta: Fox 54 News Now</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-autoplay/index.m3u8" href="javascript:void(0);">Auto Play TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/aptv/playlist.m3u8" href="javascript:void(0);">Auto Play TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dl.dropboxusercontent.com/s/emp7q8g3tc1kikj/BMusik.m3u8?dl=0" href="javascript:void(0);">Baeble Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cms-wowza.lunabyte.io/wbrz-live-1/_definst_/smil:wbrz-live.smil/chunklist_b1300000.m3u8?fluxustv.m3u8" href="javascript:void(0);">Baton Rouge: WBRZ 2 Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=211&f=.m3u8" href="javascript:void(0);">BBC America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/beachtveastcoast/playlist.m3u8" href="javascript:void(0);">Beach Coast TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/DTVHD/playlist.m3u8" href="javascript:void(0);">Beach TV - 30A</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/BTVHD/chucklist.m3u8" href="javascript:void(0);">Beach TV - Panama City</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/MTVHD/playlist.m3u8" href="javascript:void(0);">Beach TV - Pawleys Island</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream04.amp.csulb.edu:1935/Beach_TV/smil:BeachTV.smil/playlist.m3u8" href="javascript:void(0);">Beach TV CSULB</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=212&f=.m3u8" href="javascript:void(0);">beIN Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wowzaprod188-i.akamaihd.net/hls/live/728897/54d0bcd5/playlist.m3u8" href="javascript:void(0);">Bek Sports East</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wowzaprod188-i.akamaihd.net/hls/live/728897/89b077e6/playlist.m3u8" href="javascript:void(0);">Bek Sports West</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus6-a.akamaihd.net/benicia/G1750_002/chunklist.m3u8" href="javascript:void(0);">Benicia TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=213&f=.m3u8" href="javascript:void(0);">BET</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=214&f=.m3u8" href="javascript:void(0);">BET Her</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=215&f=.m3u8" href="javascript:void(0);">Big Ten Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-billycboxing/index.m3u8" href="javascript:void(0);">Billy C Boxing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://thegateway.online/BizAndYou/Roku/playlist.m3u8" href="javascript:void(0);">Biz TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-blackartist/index.m3u8" href="javascript:void(0);">Black Artist</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveproduseast.global.ssl.fastly.net/btv/desktop/us_live.m3u8" href="javascript:void(0);">Bloomberg Television (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://210.210.155.35/session/1f4b9814-7ed5-11e8-aa50-c81f66f89318/uq2663/h/h03/index1.m3u8" href="javascript:void(0);">Bloomberg Television (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/blugrassmusic/blugrassmusic/playlist.m3u8" href="javascript:void(0);">Bluegrass 4U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-bluegrassmusic4u/index.m3u8" href="javascript:void(0);">Bluegrass 4U (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-btn/index.m3u8" href="javascript:void(0);">Blues TN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/blushtv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Blush TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=216&f=.m3u8" href="javascript:void(0);">Boomerang</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcsecurelivehls-i.akamaihd.net/hls/live/598046/4744899807001_1/livestream/master.m3u8" href="javascript:void(0);">Boston: 7News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcsecurelivehls-i.akamaihd.net/hls/live/598046/4744899807001_1/livestream/master_540-57.m3u8" href="javascript:void(0);">Boston: 7News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cbsn-bos-cedexis.cbsnstream.cbsnews.com/out/v1/589d66ec6eb8434c96c28de0370d1326/master_6.m3u8" href="javascript:void(0);">Boston: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wfxt.cmgvideo.com/wfxt/2564k/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Boston: Fox News 25 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/22998687/events/6864865/live.m3u8" href="javascript:void(0);">Boston: Fox News 25 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus3-a.akamaihd.net/cityofbowie/G0466_001/playlist.m3u8" href="javascript:void(0);">Bowie TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=217&f=.m3u8" href="javascript:void(0);">Bravo</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12KN" href="javascript:void(0);">Brooklyn: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-all15.secdn.net/pegstream3-live/play/c3e1e4c4-7f11-4a54-8b8f-c590a95b4ade/playlist.m3u8" href="javascript:void(0);">Buffalo TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://butv10-livestream.bu.edu/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8" href="javascript:void(0);">BUTV10 BU</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://buzzr.global.ssl.fastly.net/out/u/buzzr_hls_4.m3u8?fluxustv.m3u8" href="javascript:void(0);">Buzzr</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/d5b46/+0000/high/c.m3u8" href="javascript:void(0);">BYUtv</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC1_1@500806/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">C-SPAN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC2_1@500807/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">C-SPAN 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC3_1@500808/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">C-SPAN 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/camerasmile/playlist.m3u8" href="javascript:void(0);">Camera Smile (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-camerasmile/index.m3u8" href="javascript:void(0);">Camera Smile (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-us-se13.secdn.net/pegstream3-live/play/5f0d9ca5-4e85-4c01-a426-9ec8d44c2c9c/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Capital City Connection Montgomery</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-capitolwrestling/index.m3u8" href="javascript:void(0);">Capitol Wrestling</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fr-c.movply.stream/hls/Carton_Network.m3u8" href="javascript:void(0);">Cartoon Network (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=218&f=.m3u8" href="javascript:void(0);">Cartoon Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/cartoons_4u/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cartoons 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=226&f=.m3u8" href="javascript:void(0);">CBS (KYW-TV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=219&f=.m3u8" href="javascript:void(0);">CBS (KYW-TV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=223&f=.m3u8" href="javascript:void(0);">CBS (WBBM)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://161.0.157.50/PLTV/88888888/224/3221227041/03.m3u8" href="javascript:void(0);">CBS (WFOR) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://190.80.3.28/CBS/CBS.isml/index.m3u8" href="javascript:void(0);">CBS (WFOR) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=228&f=.m3u8" href="javascript:void(0);">CBS (WFOR) (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=230&f=.m3u8" href="javascript:void(0);">CBS (WGCL)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=229&f=.m3u8" href="javascript:void(0);">CBS (WKMG)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=224&f=.m3u8" href="javascript:void(0);">CBS (WPEC)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=220&f=.m3u8" href="javascript:void(0);">CBS (WTSP)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cbsnewshd-lh.akamaihd.net/i/CBSNHD_7@199302/master.m3u8" href="javascript:void(0);">CBS News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/Sid4xiTQTkCT1SLu6rjUSQ/master.m3u8?iu=/8264/vaw-can/mobile_web/cbsnews_mobile" href="javascript:void(0);">CBS News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cbssportsdc-i.akamaihd.net/hls/live/518856/dc_1/desktop.m3u8" href="javascript:void(0);">CBS Sports HQ (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=231&f=.m3u8" href="javascript:void(0);">CBS Sports Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus3-a.akamaihd.net/charlotte/G0055_002/chunklist.m3u8" href="javascript:void(0);">CC-TV Charlotte County</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://156.142.85.152/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8?fluxustv.m3u8" href="javascript:void(0);">CCX Media Minnesota</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/celebrityscene/playlist.m3u8" href="javascript:void(0);">Celebrity Scene (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-celebrityscene/index.m3u8" href="javascript:void(0);">Celebrity Scene (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus4-a.akamaihd.net/cerritos/G0010_002/chunklist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cerritos TV3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live-champaign.cablecast.tv/live/CELL-296k-234p/CELL-296k-234p.m3u8" href="javascript:void(0);">CGTV Champaign</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus5-a.akamaihd.net/chandleraz/G0987_002/chunklist.m3u8" href="javascript:void(0);">Chandler Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://radio.7chan.org:8000/CH7" href="javascript:void(0);">Channel 7</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://usgeowall.sinclairstoryline.com/channel/37eb732888614810b512fdd82604244e.m3u8" href="javascript:void(0);">Charge! (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/8522553/events/live/live.m3u8" href="javascript:void(0);">Charlotte: WCCB News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wcnc-lh.akamaihd.net/i/WCNC_Breaking_1@195112/master.m3u8" href="javascript:void(0);">Charlotte: WCNC Breaking News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wxintribune-lh.akamaihd.net/i/WXINTribune_1@120151/master.m3u8" href="javascript:void(0);">Chattanooga: ABC 9 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.chdrstatic.com/cheddar/primary/1.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cheddar Business</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.chdrstatic.com/cbn/primary/1.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cheddar News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-chefchampion/index.m3u8" href="javascript:void(0);">Chef Champion</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-chefrock/index.m3u8" href="javascript:void(0);">Chef Roc Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wmaqlive-f.akamaihd.net/i/wmaqa1_1@22923/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">Chicago: NBC 5 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wgntribune-lh.akamaihd.net/i/WGNPrimary_1@304622/master.m3u8" href="javascript:void(0);">Chicago: WGN 9 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://api.new.livestream.com/accounts/26511688/events/7954874/live.m3u8" href="javascript:void(0);">Chico: Action News Now</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/12136532/events/live/live.m3u8" href="javascript:void(0);">Cincinnati: Fox 19 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=233&f=.m3u8" href="javascript:void(0);">Cinemax</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://classicarts.global.ssl.fastly.net/live/cas/master_3000k.m3u8" href="javascript:void(0);">Classic Arts Showcase</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-classiccinema/index.m3u8" href="javascript:void(0);">Classic Cinema</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/classictv/playlist.m3u8" href="javascript:void(0);">Classic TV 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/57501/events/1146195/live.m3u8" href="javascript:void(0);">Cleveland: Fox 8 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMC-TV/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">CMC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMCU-92/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">CMC-USA</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=234&f=.m3u8" href="javascript:void(0);">CMT</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d3sjmtxha86r3t.cloudfront.net/nbc/smil:cnbc.smil/FluxusTV.m3u8" href="javascript:void(0);">CNBC (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=235&f=.m3u8" href="javascript:void(0);">CNBC (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ott.artmott.com/CNN/tracks-v1a1/mono.m3u8" href="javascript:void(0);">CNN (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=236&f=.m3u8" href="javascript:void(0);">CNN (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=237&f=.m3u8" href="javascript:void(0);">Comedy Central</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://usgeowall.sinclairstoryline.com/channel/3e45c6b5354a40f787e0b2aadb0f5d6a.m3u8?tc=1&exp=1614631202&rn=2057716804&ct=c&cid=3e45c6b5354a40f787e0b2aadb0f5d6a&ad=comet&repl=aboi&ad.adUnit=%2FCOMET%2FLivestream_midroll&ad._debug=comet_vmap&ad.ad_rule=1&ad.pmad=12&ad.output=xml_vmap1&sig=b2edfb477155d2588a66e0aecdbebff5a23c90a96e55c831def9a1434a51913b" href="javascript:void(0);">Comet TV (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/ctnstream/chunklist_w1534354198_DVR.m3u8" href="javascript:void(0);">Connecticut Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/ctnSupreme/chunklist_w538335829_DVR.m3u8" href="javascript:void(0);">Connecticut Network (Court Feed)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/ctnspare/chunklist_w252238746_DVR.m3u8" href="javascript:void(0);">Connecticut Network (Instant)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/web1stream/chunklist_w1992415243_DVR.m3u8" href="javascript:void(0);">Connecticut Network (Live Stream 1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/web2stream/chunklist_w1202315245_DVR.m3u8" href="javascript:void(0);">Connecticut Network (Live Stream 2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12CT_WEST" href="javascript:void(0);">Connecticut: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12TW_CT" href="javascript:void(0);">Connecticut: News 12 (Traffic)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cinedigm.vo.llnwd.net/conssui/amagi_hls_data_xumo123-contv/CDN/master.m3u8" href="javascript:void(0);">CONtv</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/cooking_4u_network/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cooking 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=238&f=.m3u8" href="javascript:void(0);">Cooking Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://api.new.livestream.com/accounts/16030759/events/4495499/live.m3u8" href="javascript:void(0);">Corpus Christi: KRIS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/countrymusic4u/countrymusic4u/playlist.m3u8" href="javascript:void(0);">Country Music 4U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-countrymusic4u/index.m3u8" href="javascript:void(0);">Country Music 4U (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/92c7be9fb47143a58683d202e321e571.m3u8?fluxustv.m3u8" href="javascript:void(0);">Court TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/10.2/768x432?start_time=2019-12-17T20%3A15%3A00.000Z&end_time=8089&env=prd&uid=29375" href="javascript:void(0);">Cozi TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=239&f=.m3u8" href="javascript:void(0);">Cozi TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=240&f=.m3u8" href="javascript:void(0);">CW (WPIX)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://190.80.3.28/CW/CW.isml/index.m3u8" href="javascript:void(0);">CW (WSFL)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cbsta49f-dabl68fc.global.ssl.fastly.net/out/v1/dfecb53fbf434b6bbbfd91d8a2549381/manifest_21.m3u8?fluxustv.m3u8" href="javascript:void(0);">DABL (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cbsta49f-dabl68fc.global.ssl.fastly.net/out/v1/dfecb53fbf434b6bbbfd91d8a2549381/manifest_22.m3u8?fluxustv.m3u8" href="javascript:void(0);">DABL (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cbsta49f-dabl68fc.global.ssl.fastly.net/out/v1/dfecb53fbf434b6bbbfd91d8a2549381/manifest_24.m3u8?fluxustv.m3u8" href="javascript:void(0);">DABL (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/6395980/events/2598380/live.m3u8" href="javascript:void(0);">Dallas: Fox 4 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcndmtv.teleosmedia.com/stream/dmtv/dmtv/seglist_720p.m3u8" href="javascript:void(0);">Dance Music TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcndstv.teleosmedia.com/stream/dstv/dstv/seglist_720p.m3u8" href="javascript:void(0);">Dancestar TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/darcizzle.m3u8" href="javascript:void(0);">Darcizzle Offshore</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-whio.cmgvideo.com/whio/2596k/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Dayton: WHIO 7 News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-whio.cmgvideo.com:80/whio/2596k/index.m3u8" href="javascript:void(0);">Dayton: WHIO 7 News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.oct.dc.gov/out/u/15_12.m3u8" href="javascript:void(0);">DC Council Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus8-a.akamaihd.net/denver/G0080_002/chunklist.m3u8" href="javascript:void(0);">Denver 8 TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dkp8rf3nn2n8j.cloudfront.net/live/WIFI-1096k-360p/WIFI-1096k-360p.m3u8" href="javascript:void(0);">Denver Open Media 56</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2amg57no8tp11.cloudfront.net/live/WIFI-696k-360p/WIFI-696k-360p.m3u8" href="javascript:void(0);">Denver Open Media 57</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://api.new.livestream.com/accounts/9976600/events/3382760/live.m3u8" href="javascript:void(0);">Des Moines: WHO 13 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://whotribune-lh.akamaihd.net/i/WHOTribune_1@198423/master.m3u8" href="javascript:void(0);">Des Moines: WHO 13 Weather</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=241&f=.m3u8" href="javascript:void(0);">Destination America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content-auso2.uplynk.com/channel/9c9e4e410b5a471391c116166d8c010e.m3u8?ad=live" href="javascript:void(0);">Detroit: ABC 7 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=242&f=.m3u8" href="javascript:void(0);">Discovery</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=243&f=.m3u8" href="javascript:void(0);">Discovery Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=244&f=.m3u8" href="javascript:void(0);">Discovery Life</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=245&f=.m3u8" href="javascript:void(0);">Discovery Science</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://195.181.169.148/Discovery_velocity_121_Eng/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Discovery Velocity (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ott.artmott.com/DisneyChannel/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Disney Channel (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=246&f=.m3u8" href="javascript:void(0);">Disney Channel (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content-ause4.uplynk.com/channel/2696c852412a4041ba3b771e0a5e3c74/h.m3u8?exp=1557726334&ct=c&cid=2696c852412a4041ba3b771e0a5e3c74&iph=dfedfaaeca06c9f40140cd2a0ac49a55790c044d07d90e043edad3ab32e2f603&rays=hjigfedcba&euid=5F8C9D89-CA39-4C23-9A6B-2A6A0A145CCB_013_1_001_live_04-06-99_1.1.1.15&cdn=ec&stgcfg=datg&pp2ip=0&delay=10800&ddp=1&expand=drmOff&v=3&sig=a07044f5b44c510bab5cd40a76b8b5839f0711064f090d2747280ebd7798e0dc&pbs=377d94b7fb794124b73c58474a01270a" href="javascript:void(0);">Disney Junior (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=247&f=.m3u8" href="javascript:void(0);">Disney Junior (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=248&f=.m3u8" href="javascript:void(0);">Disney XD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.oct.dc.gov/out/u/DCN.m3u8" href="javascript:void(0);">District of Columbia Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://azroe0x-lh.akamaihd.net/i/test_1@775856/master.m3u8" href="javascript:void(0);">Ditty TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=249&f=.m3u8" href="javascript:void(0);">DIY Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livecdnh3.tvanywhere.ae/hls/docubox/04.m3u8?fluxustv.m3u8" href="javascript:void(0);">DocuBox</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/documentaries4u/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Documentaries 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cinedigm.vo.llnwd.net/conssui/amagi_hls_data_xumo1234A-docuramaA/CDN/master.m3u8" href="javascript:void(0);">Docurama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/dreamtv/chunks.m3u8" href="javascript:void(0);">Dream TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dust.sinclair.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Dust</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=250&f=.m3u8" href="javascript:void(0);">E!</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://imgedge.akamaized.net/amagi_hls_data_imgAAA2AA-edgesports/CDN/1920x1080_5628000/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Edge Sport</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/vf93fRSk7/playlist_360p.m3u8" href="javascript:void(0);">ElectricNOW</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=251&f=.m3u8" href="javascript:void(0);">Eleven Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/energytv/playlist.m3u8" href="javascript:void(0);">Energy TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=252&f=.m3u8" href="javascript:void(0);">Epix</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=253&f=.m3u8" href="javascript:void(0);">Epix 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=254&f=.m3u8" href="javascript:void(0);">Epix Hits</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.swagit.com/live-edge/escambiacountyfl/live-1-a/chunklist_w1496843195.m3u8" href="javascript:void(0);">Escambia TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3sjmtxha86r3t.cloudfront.net/nbc/smil:espn.smil/chunklist_b2500000.m3u8" href="javascript:void(0);">ESPN (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://npse.brots.world/espn2.m3u8" href="javascript:void(0);">ESPN (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=255&f=.m3u8" href="javascript:void(0);">ESPN (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/espn2.m3u8" href="javascript:void(0);">ESPN 2 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=256&f=.m3u8" href="javascript:void(0);">ESPN 2 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/espnews.m3u8" href="javascript:void(0);">ESPN News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=257&f=.m3u8" href="javascript:void(0);">ESPN News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/espnu.m3u8" href="javascript:void(0);">ESPN U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=258&f=.m3u8" href="javascript:void(0);">ESPN U (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://etlive-mediapackage-fastly.cbsaavideo.com/dvr/manifest.m3u8?fluxustv.m3u8" href="javascript:void(0);">ET Live (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://etlive-mediapackage-fastly.cbsaavideo.com/dvr/manifest.m3u8?iu=/8264/vaw-can/desktop/cbslocal" href="javascript:void(0);">ET Live (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://aos01-evine.secure.footprint.net/evine/dirty/Evine_Dirty_VIDEO_1_2064000.m3u8" href="javascript:void(0);">Evine</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/exercise_4u_tv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Exercise 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/ezwaytv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">EZWay Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-failarmy/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">FailArmy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cs.ebmcdn.net/eastbay-live-hs-1/fairfax-pull/_definst_/mp4:fairfax.stream/chunklist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Fairfax Public Access</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://84.22.33.254/unicast.fashionbox/index.m3u8" href="javascript:void(0);">Fashion Box</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/36bay2/gin/giniko_modelinc_2000kb_36bay2/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Fashion Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=259&f=.m3u8" href="javascript:void(0);">Fight Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/fightplustv/playlist.m3u8" href="javascript:void(0);">Fight Plus TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ott-cdn.ucom.am/s86/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">FightBox</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22696/+0000/low/c.m3u8" href="javascript:void(0);">Fighting Spirit</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://1648401168.rsc.cdn77.org/1648401168/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Filmbox</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://1949337293.rsc.cdn77.org/1949337293/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Filmbox Arthouse</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-filmriseclassictv/CDN/648x432_5000000/index.m3u8" href="javascript:void(0);">Filmrise Classics</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-filmrisecrime/CDN/640x432_2500000/index.m3u8" href="javascript:void(0);">Filmrise Crime</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-filmrisefamily/CDN/648x432_5000000/index.m3u8" href="javascript:void(0);">Filmrise Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-filmrisefreemovies/CDN/676x540_2500000/index.m3u8" href="javascript:void(0);">Filmrise Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://584b0aa350b92.streamlock.net:1935/folk-tv/myStream.sdp/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Folk TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=260&f=.m3u8" href="javascript:void(0);">Food Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://195.181.169.148/FOODNETHD_USA_Eng/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Food Network (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-food52/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">Food52</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=271&f=.m3u8" href="javascript:void(0);">Fox (KTBC)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=262&f=.m3u8" href="javascript:void(0);">Fox (KTTV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=269&f=.m3u8" href="javascript:void(0);">Fox (WAGA)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=272&f=.m3u8" href="javascript:void(0);">Fox (WJW)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=261&f=.m3u8" href="javascript:void(0);">Fox (WNYW)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=267&f=.m3u8" href="javascript:void(0);">Fox (WRBW)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://190.80.3.28/FOX/FOX.isml/FOX-audio_128052_eng=128000-video=800000.m3u8" href="javascript:void(0);">Fox (WSVN)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=263&f=.m3u8" href="javascript:void(0);">Fox (WTVT)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=265&f=.m3u8" href="javascript:void(0);">Fox (WTXF)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=273&f=.m3u8" href="javascript:void(0);">Fox Business</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ms-azure-video.gslb.startimestv.com/live/FOX_News_786_500_480x360_191112/playlist.m3u8" href="javascript:void(0);">Fox News Channel (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=275&f=.m3u8" href="javascript:void(0);">Fox News Channel (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fnurtmp-f.akamaihd.net/i/FNRADIO_1@92141/master.m3u8" href="javascript:void(0);">Fox News Radio</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=276&f=.m3u8" href="javascript:void(0);">Fox Soccer Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=108&f=.m3u8" href="javascript:void(0);">Fox Sports 1 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=489&f=.m3u8" href="javascript:void(0);">Fox Sports 1 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=109&f=.m3u8" href="javascript:void(0);">Fox Sports 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge.free-speech-tv-live.top.comcast.net/out/u/fstv.m3u8" href="javascript:void(0);">Free Speech TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=277&f=.m3u8" href="javascript:void(0);">Freeform</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streaming.sniffercat.com/scheduler/scheduleMaster/2/variant/3.m3u8" href="javascript:void(0);">FTF</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-funnybone/index.m3u8" href="javascript:void(0);">Funny Bone TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=278&f=.m3u8" href="javascript:void(0);">Fuse</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=280&f=.m3u8" href="javascript:void(0);">FX</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=281&f=.m3u8" href="javascript:void(0);">FXM</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=282&f=.m3u8" href="javascript:void(0);">FXX</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=283&f=.m3u8" href="javascript:void(0);">FYI</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.swagit.com/live-edge/galvestontx/smil:hd-16x9-1-b/playlist.m3u8" href="javascript:void(0);">Galveston County TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=286&f=.m3u8" href="javascript:void(0);">Game Show Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://player-api.new.livestream.com/accounts/11279058/events/3645614/live.m3u8" href="javascript:void(0);">Georgia: WALB 10 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/28.2/640x480?start_time=2019-12-17T20%3A15%3A00.000Z&end_time=8089&env=prd&uid=29375" href="javascript:void(0);">getTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.swagit.com/live-edge/glendaleaz/smil:std-4x3-1-a/chunklist.m3u8" href="javascript:void(0);">Glendale 11</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnglobalfashionchannel.teleosmedia.com/stream/globalfashionchannel/globalfashionchannel/seglist_720p.m3u8?fluxustv.m3u8" href="javascript:void(0);">Global Fashion Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/going_to_war/playlist.m3u8" href="javascript:void(0);">Going To War</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-goldentv/index.m3u8" href="javascript:void(0);">Golden TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/gonefishing/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Gone Fishing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/hunting/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Gone Hunting</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/9485505/events/3244983/live.m3u8" href="javascript:void(0);">Grand Rapids: Fox 17 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus4-a.akamaihd.net/greensboro/G0197_003/chunklist.m3u8" href="javascript:void(0);">Greensboro TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-guidingstar/index.m3u8" href="javascript:void(0);">Guiding Star TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/22998687/events/6864865/live.m3u8" href="javascript:void(0);">Gulfport: WXXV 25 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/ebf95254ca/+0000/low/c.m3u8" href="javascript:void(0);">Gusto TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=287&f=.m3u8" href="javascript:void(0);">Hallmark Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=288&f=.m3u8" href="javascript:void(0);">Hallmark Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=289&f=.m3u8" href="javascript:void(0);">Hallmark Movies & Mysteries</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://crownmediaingest.akamaized.net/hls/live/567739/mm/master.m3u8?hdnts=exp=3053348551~acl=/*~hmac=592bc88702cf4f549f6fa1233adcf78fdff0209e062d72a244dce61650291d26" href="javascript:void(0);">Hallmark Movies & Mysteries (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wvitlive-f.akamaihd.net/i/wvitb2_1@71164/master.m3u8" href="javascript:void(0);">Hartford: WVIT 30 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-HBCU/index.m3u8" href="javascript:void(0);">HBCU Game Day</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=290&f=.m3u8" href="javascript:void(0);">HBO (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=293&f=.m3u8" href="javascript:void(0);">HBO (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=291&f=.m3u8" href="javascript:void(0);">HBO Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=292&f=.m3u8" href="javascript:void(0);">HBO Signature</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/4.3/640x480?start_time=2019-12-17T20%3A15%3A00.000Z&end_time=8089&env=prd&uid=29375" href="javascript:void(0);">Heartland</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=294&f=.m3u8" href="javascript:void(0);">HGTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=295&f=.m3u8" href="javascript:void(0);">History</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=296&f=.m3u8" href="javascript:void(0);">HLN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d3jwlm43fjnwxe.cloudfront.net/ushochanda/2/prog_index.m3u8" href="javascript:void(0);">Hochanda TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/d5b48/+0000/low/c.m3u8" href="javascript:void(0);">Honor TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-honortv/index.m3u8" href="javascript:void(0);">Honor TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/horrified/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Horrified TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-hotrock/index.m3u8" href="javascript:void(0);">Hot Rock TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:HouseChannel_all/chucklist.m3u8" href="javascript:void(0);">House of Representatives</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/6396012/events/live/live.m3u8" href="javascript:void(0);">Houston: Fox 26 News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/6396012/events/2598382/live.m3u8" href="javascript:void(0);">Houston: Fox 26 News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://html5-lh.akamaihd.net/i/html5_01@182967/master.m3u8" href="javascript:void(0);">HSN (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/41.1/640x480?start_time=2019-12-20T23%3A45%3A00.000Z&end_time=2028&env=prd&uid=29375" href="javascript:void(0);">HSN (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://hsn2html5-lh.akamaihd.net/i/hsn2html5_01@13178/master.m3u8" href="javascript:void(0);">HSN 2 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/41.2/640x480?start_time=2019-12-20T23%3A45%3A00.000Z&end_time=2028&env=prd&uid=29375" href="javascript:void(0);">HSN 2 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12HV" href="javascript:void(0);">Hudson Valley: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://1111296894.rsc.cdn77.org/LS-ATL-56868-1/index.m3u8" href="javascript:void(0);">Hunt Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ktvb-lh.akamaihd.net/i/KTVB_Shows_1@60359/master.m3u8" href="javascript:void(0);">Idaho: KTVB 7 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=297&f=.m3u8" href="javascript:void(0);">IFC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wttv-lh.akamaihd.net:80/i/WTTVBreaking_1@333494/master.m3u8" href="javascript:void(0);">Indianapolis: CBS 4 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnindiewave.teleosmedia.com/stream/indiewave/indiewave/playlist.m3u8" href="javascript:void(0);">IndieWave</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=299&f=.m3u8" href="javascript:void(0);">Investigation Discovery</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.30a-tv.com/InvPit.m3u8?fluxustv.m3u8" href="javascript:void(0);">Investment Pitch</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-iread2know/index.m3u8" href="javascript:void(0);">iRead2Know</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-shetv/index.m3u8" href="javascript:void(0);">iShe TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/its_comming_soon/chunks.m3u8" href="javascript:void(0);">It's At The Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wjax.cmgvideo.com/wjax/2564k/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Jacksonville: WJAX Action News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://svc-lvanvato-cxtv-wjax.cmgvideo.com/wjax/564k/index.m3u8" href="javascript:void(0);">Jacksonville: WJAX Action News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wowzaprod134-i.akamaihd.net/hls/live/577814/ccddaf02/playlist.m3u8" href="javascript:void(0);">Jewelry Television</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/65.3/768x432?start_time=2019-12-11T19%3A45%3A00.000Z&end_time=2029-12-11T23%3A00%3A00.000Z&env=prd&uid=29375" href="javascript:void(0);">Justice Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/kartoonfuntime/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kartoon Fun Time (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/kartoonfuntime/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kartoon Fun Time (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/kathryn_raakers_world/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kathryn Raaker's World</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://klive-a.akamaihd.net/dc-0/live/hls/p/391241/e/0_bthpnu1j/sd/10000/t/YwqLo1YivB_aumq-LxAuWg/master.m3u8" href="javascript:void(0);">KBVR TV OSU</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-la.mybtv.net/event/6.0/1280x720?start_time=2019-12-12T11%3A45%3A00.000Z&end_time=2028&env=prd&uid=24610" href="javascript:void(0);">KDOC 56 Los Angeles</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/KTVHD/chunklist_w363623166.m3u8" href="javascript:void(0);">Key TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://usgeowall.sinclairstoryline.com/channel/1698bf57810a48c486b83d542bca298d.m3u8?tc=1&exp=1614631202&rn=1698140798&ct=c&cid=1698bf57810a48c486b83d542bca298d&repl=aboi&sig=3c0463729cd2ddcb9509c3130849b8737dd917ccbaafaccb832d0ec43cae6db5" href="javascript:void(0);">Kids Click (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://central.dashstreams.net/onestudio/jerrymiller/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">KLNM TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://173.199.158.79:1935/roku/myStream/playlist.m3u8" href="javascript:void(0);">Kool TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://player-api.new.livestream.com/accounts/12643960/events/3893868/live.m3u8" href="javascript:void(0);">KTVK 3 Phoenix</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus6-a.akamaihd.net/la36/G0019_002/chunklist_w1442089063.m3u8?fluxustv.m3u8" href="javascript:void(0);">LA36</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus3-a.akamaihd.net/lakehavasucity/G0643_002/chunklist.m3u8" href="javascript:void(0);">Lake Havasu City 4</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/39919d3f7a074eefa8bf579214e952f9.m3u8?ad=live" href="javascript:void(0);">Las Vegas: 13 Action News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1234A-lawcrime/CDN/master.m3u8" href="javascript:void(0);">Law & Crime Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://snagfilms-lh.akamaihd.net/i/Laxsportsnetwork_1@322790/master.m3u8" href="javascript:void(0);">Lax Sports Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edu.leominster.tv/Edu/smil:Edu.smil/chunklist_w43731873_b1344100_sleng_t64NzIwcA==.m3u8?fluxustv.m3u8" href="javascript:void(0);">Leominster TV Educational</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gov.leominster.tv/Gov/smil:Gov.smil/chunklist_w1957429215_b1344100_sleng_t64NzIwcA==.m3u8?fluxustv.m3u8" href="javascript:void(0);">Leominster TV Government</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gov.leominster.tv/Pub/smil:Pub.smil/chunklist_w2036537178_b1344100_sleng_t64NzIwcA==.m3u8?fluxustv.m3u8" href="javascript:void(0);">Leominster TV Public</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/letsbuildtv/playlist.m3u8" href="javascript:void(0);">Let's Build</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus2-a.akamaihd.net/lfucg/G0264_002/chunklist_w831870727.m3u8?fluxustv.m3u8" href="javascript:void(0);">Lex TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=300&f=.m3u8" href="javascript:void(0);">Lifetime</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lindenwood-lh.akamaihd.net/i/lindenwood_1@728008/master.m3u8" href="javascript:void(0);">Lindenwood University TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/Living_Outdoors/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Living Outdoors</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=301&f=.m3u8" href="javascript:void(0);">LMN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://5tv.lincoln.ne.gov/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8?fluxustv.m3u8" href="javascript:void(0);">LNKTV City</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://80tv.lincoln.ne.gov/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8?fluxustv.m3u8" href="javascript:void(0);">LNKTV Education</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://10tv.lincoln.ne.gov/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8?fluxustv.m3u8" href="javascript:void(0);">LNKTV Health</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ottmanifest.weathergroup.com/live/10.233.185.101:58081/api/v1/live/hls/localnow/index.m3u8?network=OTT&experienceid=paPhiladelphia&seid=532865b2-796b-497d-abb2-56df16f62f32&showlocalnow=false&cdn=https%3a//ottcdn-a.akamaihd.net&sessionId=LocalNowWeb_bW9jLm9vYWNiQDM4NzkwZXd0&format=HLS&tpp=10443" href="javascript:void(0);">Local Now</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12LI_WEST" href="javascript:void(0);">Long Island: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12TW_LI" href="javascript:void(0);">Long Island: News 12 (Traffic)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/TxSbNMu4R5anKrjV02VOBg/master.m3u8?iu=/4128/CBS.LA.OTT" href="javascript:void(0);">Los Angeles: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://na-us-se13.secdn.net/pegstream3-live/play/d6af6526-5e48-4f8d-aa2c-ed1c270f20d0/chunklist_w2046155663.m3u8" href="javascript:void(0);">LVTV-3 La Verne Community TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-mwg/index.m3u8" href="javascript:void(0);">Mad Dog & Merrill Midwest Grill’n</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ad-playlistserver.aws.syncbak.com/playlist/899088/master.m3u8?access_token=eyJhbGciOiJIUzI1NiIsImtpZCI6IkdyYXkyMDE2MDgyOSIsInN1YiI6IioiLCJ0eXAiOiJKV1QifQ.eyJleHAiOjE3OTAzNjkxMDUsImlzcyI6IldMUyIsIm1kNSI6ImJhZTU4Y2ZlZWM2NmU1MjZkNmVjZmE1YmUzNTQxMzQ4IiwibWlkIjoiODk5MDg4In0.vBWkHmqS3z3dpq8UWfbk4wFd-vQlj6B0up-rpt7X_7Q" href="javascript:void(0);">Madison: NBC 15 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live-mcm11.cablecast.tv/live/CELL-296k-234p/CELL-296k-234p.m3u8" href="javascript:void(0);">MCM-TV McMinnville</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.mcn6.org:8180/live/CELL-496k-270p/CELL-496k-270p.m3u8" href="javascript:void(0);">Metro Cable Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mgm-ssai.akamaized.net/amagi_hls_data_mgmAAAAAA-theworks/CDN/720x404_1425600/index.m3u8" href="javascript:void(0);">MGM Sci-Fi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cbsn-min-cedexis.cbsnstream.cbsnews.com/out/v1/76518f06941246ba810c8d175600bf74/master_6.m3u8" href="javascript:void(0);">Minnesota: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=303&f=.m3u8" href="javascript:void(0);">MLB Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/molaughtertv/molaughtertv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Mo Laughter TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ott.mobcrush.com/hls/0/ott.m3u8" href="javascript:void(0);">Mobcrush</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/0c9a09c94c/+0000/low/c.m3u8" href="javascript:void(0);">Monarch Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2-playlistserver.aws.syncbak.com/playlist/893553/master.m3u8?access_token=eyJhbGciOiJIUzI1NiIsImtpZCI6IkdyYXkyMDE2MDgyOSIsInN1YiI6IioiLCJ0eXAiOiJKV1QifQ.eyJleHAiOjE3OTAzNjcyMzUsImlzcyI6IldMUyIsIm1kNSI6IjM5YWE1ZjczMTgyYTg0NThiY2QzOTcxMjQzYzVhZDc1IiwibWlkIjoiODkzNTUzIn0.v4oZTq8PnYSg_UAfc_nt9tO2ThQy44A-F8-colQ2Ijg" href="javascript:void(0);">Monroe: KNOE 8 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=382&f=.m3u8" href="javascript:void(0);">Motor Trend</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/movee4u/playlist.m3u8" href="javascript:void(0);">Movee 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/e9b4093a41/+0000/high/c.m3u8" href="javascript:void(0);">Movie Kingdom</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=304&f=.m3u8" href="javascript:void(0);">MSG</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=305&f=.m3u8" href="javascript:void(0);">MSG+</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d3sjmtxha86r3t.cloudfront.net/nbc/smil:msnbc.smil/fluxustv.m3u8?fluxustv.m3u8" href="javascript:void(0);">MSNBC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=306&f=.m3u8" href="javascript:void(0);">MSNBC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=307&f=.m3u8" href="javascript:void(0);">MTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=308&f=.m3u8" href="javascript:void(0);">MTV 2 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://king365-tv.com/leblanc/leblanc/26860" href="javascript:void(0);">MTV2 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge.music-choice-play-chaina1.top.comcast.net/PlayMetadataInserter/play/chunklist.m3u8" href="javascript:void(0);">Music Choice</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-mvptv/index.m3u8" href="javascript:void(0);">MVP TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://central.dashstreams.net/onestudio/holyfield/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">My Holyfield TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/musicjam/playlist.m3u8" href="javascript:void(0);">My Jam</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/my_life_4u/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">My Life TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/mymusicchannel30a/playlist.m3u8" href="javascript:void(0);">My Music Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-mythos/index.m3u8" href="javascript:void(0);">Mythos</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/9287016/events/3206504/live.m3u8" href="javascript:void(0);">N. Carolina: MyFox8 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live2-naleo.cablecast.tv/live/CELL-296k-234p/CELL-296k-234p.m3u8" href="javascript:void(0);">Na Leo TV 54 Hawaii</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://iphone-streaming.ustream.tv/uhls/6540154/streams/live/iphone/playlist.m3u8" href="javascript:void(0);">NASA TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.ums.ustream.tv/playlist/directhls/channel/6540154/playlist.m3u8?sgn=31d0dfb847c358d4cedcd2256dc4e1c42a7f13a7" href="javascript:void(0);">NASA TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://iphone-streaming.ustream.tv/uhls/10414700/streams/live/iphone/playlist.m3u8" href="javascript:void(0);">NASA TV Media</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=311&f=.m3u8" href="javascript:void(0);">Nat Geo Wild</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=310&f=.m3u8" href="javascript:void(0);">National Geographic</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.ec.nau.edu/live/amlst:channelfour/chunklist_w842042479_b628000.m3u8" href="javascript:void(0);">Naz Today</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://45.92.69.76:8000/play/a05v" href="javascript:void(0);">NBA TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=312&f=.m3u8" href="javascript:void(0);">NBA TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=317&f=.m3u8" href="javascript:void(0);">NBC (KNBC)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=315&f=.m3u8" href="javascript:void(0);">NBC (WBBH)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=314&f=.m3u8" href="javascript:void(0);">NBC (WCAU)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=316&f=.m3u8" href="javascript:void(0);">NBC (WESH)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=313&f=.m3u8" href="javascript:void(0);">NBC (WGAL)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://161.0.157.51/PLTV/88888888/224/3221227040/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">NBC (WTVJ) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://190.80.3.28/NBC/NBC.isml/index.m3u8" href="javascript:void(0);">NBC (WTVJ) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=321&f=.m3u8" href="javascript:void(0);">NBC (WTVJ) (Opt-3)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://203.154.243.89:1208" href="javascript:void(0);">NBC Golf (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=40&f=.m3u8" href="javascript:void(0);">NBC Golf (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=323&f=.m3u8" href="javascript:void(0);">NBC Sports Bay Area</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=324&f=.m3u8" href="javascript:void(0);">NBC Sports Boston</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=325&f=.m3u8" href="javascript:void(0);">NBC Sports California</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=326&f=.m3u8" href="javascript:void(0);">NBC Sports Chicago</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=331&f=.m3u8" href="javascript:void(0);">NBC Sports Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=327&f=.m3u8" href="javascript:void(0);">NBC Sports Northwest</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=328&f=.m3u8" href="javascript:void(0);">NBC Sports Philadelphia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=329&f=.m3u8" href="javascript:void(0);">NBC Sports Washington</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12NJ_CENTRAL" href="javascript:void(0);">New Jersey: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12TW_NJ" href="javascript:void(0);">New Jersey: News 12 (Traffic)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/NOTVHD/playlist.m3u8" href="javascript:void(0);">New Orleans TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/10891792/events/3578864/live.m3u8" href="javascript:void(0);">New Orleans: Fox 8 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.cbsnews.com/common/video/cbsn-ny-prod.m3u8" href="javascript:void(0);">New York: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdnapisec.kaltura.com/p/424341/sp/42434100/playManifest/entryId/1_is35xshu/format/applehttp/protocol/https/uiConfId/39790741/a.m3u8?fluxustv.m3u8" href="javascript:void(0);">New York: FiOS1 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12TW_NYC" href="javascript:void(0);">New York: News 12 (Traffic)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12TW_WC" href="javascript:void(0);">New York: News 12+</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://api.new.livestream.com/accounts/8896933/events/3104530/live.m3u8" href="javascript:void(0);">New York: PIX 11 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nmxlive.akamaized.net/hls/live/529965/Live_1/index.m3u8" href="javascript:void(0);">Newsmax TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://broadcastny.yournewsnet.com:8081/master/newsnetweb/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">NewsNet</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/4bb4901b934c4e029fd4c1abfc766c37.m3u8?ad=newsyweb" href="javascript:void(0);">Newsy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=332&f=.m3u8" href="javascript:void(0);">NFL Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://svglive3-event.level3.nfl.com/nflent3/live/nfl_now/NFLNOW_1200k.m3u8" href="javascript:void(0);">NFL Now (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=333&f=.m3u8" href="javascript:void(0);">NFL Red Zone</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=334&f=.m3u8" href="javascript:void(0);">NHL Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=336&f=.m3u8" href="javascript:void(0);">Nick Jr.</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=337&f=.m3u8" href="javascript:void(0);">Nick Toons</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=335&f=.m3u8" href="javascript:void(0);">Nickelodeon</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/NothingScripted.m3u8?fluxustv.m3u8" href="javascript:void(0);">Nothing Scripted</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/npowered/playlist.m3u8" href="javascript:void(0);">nPowered TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/19770665/events/5522162/live.m3u8" href="javascript:void(0);">NYXT NYC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus12-a.akamaihd.net/olelo/G0125_009/chunklist.m3u8" href="javascript:void(0);">Olelo Community Media 49</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus12-a.akamaihd.net/olelo/G0125_011/chunklist.m3u8" href="javascript:void(0);">Olelo Community Media 53</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus12-a.akamaihd.net/olelo/G0125_012/chunklist.m3u8" href="javascript:void(0);">Olelo Community Media 54</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus12-a.akamaihd.net/olelo/G0125_013/chunklist.m3u8" href="javascript:void(0);">Olelo Community Media 55</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content.uplynk.com/channel/328d1434fb51476cb6567c74d5b2cc70.m3u8" href="javascript:void(0);">Omaha: 3News Now</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/myoktv/chunks.m3u8" href="javascript:void(0);">Opportunity Knocks TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=339&f=.m3u8" href="javascript:void(0);">Oprah Winfrey Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://w3.cdn.anvato.net/live/ephemeral/3QA1gOwdRzqhnwPBUewI5VY7Yd9pnkvb/owny/2596k/index.m3u8" href="javascript:void(0);">Oprah Winfrey Network (Opt-1) (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://w3.cdn.anvato.net/live/ephemeral/3QA1gOwdRzqhnwPBUewI5VY7Yd9pnkvb/owny/4296k/index.m3u8" href="javascript:void(0);">Oprah Winfrey Network (Opt-2) (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://klive-a.akamaihd.net/dc-0/live/hls/p/391241/e/0_bthpnu1j/sd/10000/t/YwqLo1YivB_aumq-LxAuWg/master.m3u8" href="javascript:void(0);">Orange Media Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://otv3.ocfl.net:1936/OrangeTV/smil:OrangeTV.smil/chunklist_w1007974604_b894100_sleng.m3u8" href="javascript:void(0);">Orange TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/6908462/events/2706967/live.m3u8" href="javascript:void(0);">Oregon: Fox 12 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/19128364/events/5285531/live.m3u8" href="javascript:void(0);">Oregon: News Channel 21</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://svc-lv-cxtv-wftv.cmgvideo.com/out/u/WFTVN1.m3u8" href="javascript:void(0);">Orlando: WFTV 9 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://pablogott.videocdn.scaleengine.net/pablogott-live/play/ooftv1/playlist.m3u8" href="javascript:void(0);">Out of Focus TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://84.22.33.254/unicast.outdoorchannel/index.m3u8" href="javascript:void(0);">Outdoor Channel (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=338&f=.m3u8" href="javascript:void(0);">Outdoor Channel (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/3gT64sH/c.m3u8" href="javascript:void(0);">Outside TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=194&f=.m3u8" href="javascript:void(0);">Outside TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=340&f=.m3u8" href="javascript:void(0);">Oxygen</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=341&f=.m3u8" href="javascript:void(0);">PAC-12 Mountain</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=342&f=.m3u8" href="javascript:void(0);">PAC-12 Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=343&f=.m3u8" href="javascript:void(0);">PAC-12 Oregon</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/20847880/events/6053226/live.m3u8" href="javascript:void(0);">Palm Springs: News Channel 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=344&f=.m3u8" href="javascript:void(0);">Paramount Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://47.23.7.30:8080/live/WIFI-1096k-360p/WIFI-1096k-360p.m3u8" href="javascript:void(0);">PATV Great Neck</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://190.80.3.28/PBS/PBS.isml/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">PBS (WPBT)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://190.80.3.28/PBS/PBS.isml/PBS-audio_120052_eng=120000-video=1870000.m3u8" href="javascript:void(0);">PBS Kids</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-cdn.pbskids.org/out/u/est.m3u8" href="javascript:void(0);">PBS Kids (EST) (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-cdn.pbskids.org/out/u/aim/wttw.m3u8" href="javascript:void(0);">PBS Kids (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-cdn.pbskids.org/out/u/pst.m3u8" href="javascript:void(0);">PBS Kids (PST) (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/b5d2k0x/playlist720p.m3u8" href="javascript:void(0);">People TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cbsn-phi-cedexis.cbsnstream.cbsnews.com/out/v1/5c9ad3e215984b0e9ad845b335216b72/master_6.m3u8" href="javascript:void(0);">Philadelphia: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wcaulive-f.akamaihd.net/i/wcaua1_1@13991/master.m3u8" href="javascript:void(0);">Philadelphia: NBC 10 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/17.1/1280x720?start_time=2019-12-11T19%3A45%3A00.000Z&end_time=2046&env=prd&uid=29375" href="javascript:void(0);">PHL 17 Philadelphia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/1859803/events/1648429/live.m3u8" href="javascript:void(0);">Phoenix: Fox 10 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wpxi.cmgvideo.com/wpxi/2564k/index.m3u8" href="javascript:void(0);">Pittsburgh: WPXI 11 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/planetshopping/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Planet Cannabis</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-planetmusic/index.m3u8" href="javascript:void(0);">Planet Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live-poptv-fastly-prod.global.ssl.fastly.net/pop/master.m3u8" href="javascript:void(0);">Pop (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=346&f=.m3u8" href="javascript:void(0);">Pop (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-ptd/index.m3u8" href="javascript:void(0);">Prime Time Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect.live.pgcps.cablecast.tv/live/WIFI-696k-360p/WIFI-696k-360p.m3u8" href="javascript:void(0);">Prince George County Public Schools</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/61.5/640x480?start_time=2019-12-13T20%3A45%3A00.000Z&end_time=2026&env=prd&uid=29375" href="javascript:void(0);">QVC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/4.7/640x480?start_time=2019-12-13T21%3A45%3A00.000Z&end_time=2026&env=prd&uid=29375" href="javascript:void(0);">QVC 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/41.4/640x480?start_time=2019-12-13T21%3A45%3A00.000Z&end_time=2026&env=prd&uid=29375" href="javascript:void(0);">QVC 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dms.redbull.tv/v3/linear-borb/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjYXRlZ29yeSI6InBlcnNvbmFsX2NvbXB1dGVyIiwiY291bnRyeV9jb2RlIjoidXMiLCJleHBpcmVzIjoiMjAxNy0wOS0xNlQxNzo0NjowMy45NjM0NjI4NDJaIiwib3NfZmFtaWx5IjoiaHR0cCIsInJlbW90ZV9pcCI6IjEwLjE1Ny4xMTIuMTQ4IiwidWEiOiJNb3ppbGxhLzUuMCAoTWFjaW50b3NoOyBJbnRlbCBNYWMgT1MgWCAxMF8xMl81KSBBcHBsZVdlYktpdC82MDMuMi40IChLSFRNTCwgbGlrZSBHZWNrbykgVmVyc2lvbi8xMC4xLjEgU2FmYXJpLzYwMy4yLjQiLCJ1aWQiOiJkOGZiZWYzMC0yZDhhLTQwYTUtOGNjNy0wNzgxNGJhMTliNzMifQ.Q_38FNpW3so5yrA5FQt9qBuix3dTulKpb6uQ0dRjrtY/playlist.m3u8" href="javascript:void(0);">Red Bull TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_1660.m3u8" href="javascript:void(0);">Red Bull TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_3360.m3u8" href="javascript:void(0);">Red Bull TV (UHD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dai2.xumo.com/amagi_hls_data_xumo1212A-redboxbatterypop/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Battery Pop</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://comedy-redbox.amagi.tv/hls/amagi_hls_data_redboxAAA-comedy/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Comedy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dai2.xumo.com/amagi_hls_data_xumo1212A-redboxfilmhub/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Film Hub</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dai2.xumo.com/amagi_hls_data_xumo1212A-redboxhi-ya/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Hi-Yah!</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dai2.xumo.com/amagi_hls_data_xumo1212A-redboxkabillion/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Kabillion</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dai2.xumo.com/amagi_hls_data_xumo1212A-redbox-maverickmovies/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Maverick Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rush-redbox.amagi.tv/hls/amagi_hls_data_redboxAAA-rush/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Rush</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://spotlight-redbox.amagi.tv/hls/amagi_hls_data_redboxAAA-spotlight/CDN/playlist.m3u8" href="javascript:void(0);">RedBox Spotlight</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/regalia_network/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Regalia TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/2.5/768x432?start_time=2019-12-17T20%3A15%3A00.000Z&end_time=8089&env=prd&uid=29375" href="javascript:void(0);">Retro TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dcunilive28-lh.akamaihd.net/i/dclive_1@624563/master.m3u8" href="javascript:void(0);">Rev'n</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/rightnowtv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Right Now TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/rightnowtv/playlist.m3u8" href="javascript:void(0);">Right Now TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2klx6wjx7p5vm.cloudfront.net/Rooster-teeth/ngrp:Rooster-teeth_all/playlist.m3u8" href="javascript:void(0);">Rooster Teeth TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-rope2rope/index.m3u8" href="javascript:void(0);">Rope 2 Rope</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ott-cdn.ucom.am/s93/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">RT Documentary</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://runway.videocdn.scaleengine.net/runway-iphone/play/runway/chunklist.m3u8" href="javascript:void(0);">Runway TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://oflash.dfw.swagit.com/live/ryeny/smil:std-4x3-1-a/playlist.m3u8" href="javascript:void(0);">RyeTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/9486720/events/3245377/live.m3u8" href="javascript:void(0);">Sacramento: Fox 40 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/9263055/events/3189799/live.m3u8" href="javascript:void(0);">San Diego: Fox 5 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://player-api.new.livestream.com/accounts/25082096/events/7376073/live.m3u8" href="javascript:void(0);">San Diego: KUSI 51 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://kntvlive-f.akamaihd.net/i/kntvb2_1@15530/index_1286_av-p.m3u8" href="javascript:void(0);">San Francisco: NBC 11 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/SciFiTV/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Sci-fi 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnleomarkstudios.teleosmedia.com/stream/leomarkstudios/screamfest/seglist_720p.m3u8" href="javascript:void(0);">Screamfest</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://5caeec96c1972.streamlock.net/broadcast/scctv/playlist.m3u8" href="javascript:void(0);">Seattle Colleges TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-kiro.cmgvideo.com/kiro/1864k/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Seattle: KIRO 7 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/2c88dfe19e1447e6a6aa27e8e143a140.m3u8" href="javascript:void(0);">Seattle: KOMO 4 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/9486768/events/3245401/live.m3u8" href="javascript:void(0);">Seattle: Q13 Fox News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/sec.m3u8" href="javascript:void(0);">SEC Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=347&f=.m3u8" href="javascript:void(0);">SEC Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-stgn/index.m3u8" href="javascript:void(0);">Sent TV Global Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/She_Tv_Network/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">She TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://aos01-evine.secure.footprint.net/evine/cleanfeed/VIDEO_0_2064000.m3u8" href="javascript:void(0);">Shop HQ</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dpfbqenlgkzdh.cloudfront.net/shoplc_backup/live.m3u8" href="javascript:void(0);">Shop LC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/shopping_4u/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Shopping 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=348&f=.m3u8" href="javascript:void(0);">Showtime</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=349&f=.m3u8" href="javascript:void(0);">Showtime 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=350&f=.m3u8" href="javascript:void(0);">Showtime Extreme</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=351&f=.m3u8" href="javascript:void(0);">Showtime Showcase</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/sidewalks.m3u8" href="javascript:void(0);">Sidewalks</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnswee.teleosmedia.com/stream/swee/signmetv/seglist_720p.m3u8" href="javascript:void(0);">Sign Me TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ms-azure-video.gslb.startimestv.com/live/SMITHSONIAN_CHANNEL_1166_500_480x360_662502/playlist.m3u8" href="javascript:void(0);">Smithsonian Channel (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=352&f=.m3u8" href="javascript:void(0);">Smithsonian Channel (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://yipcontent-lh.akamaihd.net/i/sonymoviechannel_1@569927/master.m3u8" href="javascript:void(0);">Sony Movie Channel (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://147.174.13.196/live/WIFI-1296k-540p/WIFI-1296k-540p.m3u8" href="javascript:void(0);">Southeastern Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=354&f=.m3u8" href="javascript:void(0);">Spectrum SportsNet</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/sportstvplus/playlist.m3u8" href="javascript:void(0);">Sports TV Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22697/+0000/hi/c.m3u8" href="javascript:void(0);">Sportskool</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=353&f=.m3u8" href="javascript:void(0);">SportsNet New York</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/spydar/playlist.m3u8" href="javascript:void(0);">Spydar TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/spydar/chunks.m3u8" href="javascript:void(0);">Spydar TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://66.210.225.230/live/CELL-496k-270p/CELL-496k-270p.m3u8" href="javascript:void(0);">St. Charles Parish TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d28avce4cnwu2y.cloudfront.net/v1/manifest/61a556f78e4547c8ab5c6297ea291d6350767ca2/Mux/37f5dd6d-5713-4998-8354-8c6675612b42/0.m3u8" href="javascript:void(0);">Stadium</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=356&f=.m3u8" href="javascript:void(0);">Starz</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=357&f=.m3u8" href="javascript:void(0);">Starz Edge</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=359&f=.m3u8" href="javascript:void(0);">Starz Encore</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=358&f=.m3u8" href="javascript:void(0);">Starz Westerns</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/streetmusic/streetmusic/playlist.m3u8" href="javascript:void(0);">Street Music 4U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-streetmusic4u/index.m3u8" href="javascript:void(0);">Street Music 4U (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/d5b46/+0000/c.m3u8" href="javascript:void(0);">Studio C</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=360&f=.m3u8" href="javascript:void(0);">Sundance TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=361&f=.m3u8" href="javascript:void(0);">Syfy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tastemadessai.akamaized.net/amagi_hls_data_tastemade-tastemade/CDN/718x404_2002829/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Tastemade</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://trinity-lh.akamaihd.net/i/ttmain_d@82127/index_3128_av-p.m3u8?fluxustv.m3u8" href="javascript:void(0);">TastyTrade</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content.uplynk.com/channel/1831163f97674328ad9f4b4814ed39c5.m3u8?tc=1&exp=1614631202&rn=614441536&ct=c&cid=1831163f97674328ad9f4b4814ed39c5&ad=comet&ad.adUnit=%2FTBD%2FLivestream_midroll&ad._debug=TBDNET_ssai_livestream_midroll&ad.ad_rule=1&ad.pmad=12&ad.output=xml_vmap1&sig=5d194a4e4c5a4d59023d6a39a2ba5ba82dcd817b615e9f82115c41d9b26ffd0a" href="javascript:void(0);">TBD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=362&f=.m3u8" href="javascript:void(0);">TBS</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://195.181.169.148/TBS_Eng/tracks-v1a1/mono.m3u8" href="javascript:void(0);">TBS (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=363&f=.m3u8" href="javascript:void(0);">TCM</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus1-a.akamaihd.net/tempe/G0355_003/chunklist.m3u8" href="javascript:void(0);">Tempe 11</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playoutengine.sinclairstoryline.com/playout/9f87522c-5a0e-4ff4-b82c-d5564216132f/g.m3u8" href="javascript:void(0);">Tennis Channel (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=369&f=.m3u8" href="javascript:void(0);">Tennis Channel (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playoutengine.sinclairstoryline.com/playout/f2f8b269-dd85-4434-bdd3-b3a64ca9cd60/g.m3u8" href="javascript:void(0);">Tennis Channel Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tstv-stream.m3u8m.utexas.edu/hls/livestream_hi/index.m3u8" href="javascript:void(0);">Texas Student TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-theasylum/CDN/1280x720_2500000/index.m3u8" href="javascript:void(0);">The Asylum</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/beachy.m3u8?fluxustv.m3u8" href="javascript:void(0);">The Beach Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12BX" href="javascript:void(0);">The Bronx: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dcunilive2-lh.akamaihd.net/i/dclive_1@390829/master.m3u8" href="javascript:void(0);">The Country Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://distro.akamaized.net/indexfd_1280x720.m3u8" href="javascript:void(0);">The Film Detective</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-thegrid/index.m3u8" href="javascript:void(0);">The Grid</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge1.tikilive.com:1935/unrestricted_tikilive/25947/amlst:NWKlw6jwyXpz/chunklist_w981409619_b1105254.m3u8?fluxustv.m3u8" href="javascript:void(0);">The Outdoor Cooking Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-petcollective/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">The Pet Collective</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22719/+0000/hi/c.m3u8" href="javascript:void(0);">The Titanic Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://weather-lh.akamaihd.net/i/twc_1@92006/master.m3u8" href="javascript:void(0);">The Weather Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mgm-ssai.akamaized.net/amagi_hls_data_mgmAAAAAA-theworks/CDN/720x404_1425600/index.m3u8" href="javascript:void(0);">The Works</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=371&f=.m3u8" href="javascript:void(0);">TLC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1234A-tmz/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">TMZ</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=372&f=.m3u8" href="javascript:void(0);">TNT (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=18&f=.m3u8" href="javascript:void(0);">TNT (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.new.livestream.com/accounts/12003465/events/3786544/live.m3u8" href="javascript:void(0);">Toledo: WTOL 11 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus2-a.akamaihd.net/vienna-va/G1359_002/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Town of Vienna Community Network (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus2-a.akamaihd.net/vienna-va/G1359_003/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Town of Vienna Community Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge1.dashmedia.tv/onestudio/travel4u/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Travel 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=373&f=.m3u8" href="javascript:void(0);">Travel Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=374&f=.m3u8" href="javascript:void(0);">truTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=376&f=.m3u8" href="javascript:void(0);">TV Land</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=377&f=.m3u8" href="javascript:void(0);">TV One</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=378&f=.m3u8" href="javascript:void(0);">TVG</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsboxing/index.m3u8" href="javascript:void(0);">TVS Boxing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvsclassicmovies/index.m3u8" href="javascript:void(0);">TVS Classic Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvs/index.m3u8" href="javascript:void(0);">TVS Classic Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvsdriveinmovie/index.m3u8" href="javascript:void(0);">TVS Drive-in Movie</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-TVSFamilyChannel/index.m3u8" href="javascript:void(0);">TVS Family Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-TVSFlashback/index.m3u8" href="javascript:void(0);">TVS Flashback</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsfrontier/index.m3u8" href="javascript:void(0);">TVS Frontier</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-hitops/index.m3u8" href="javascript:void(0);">TVS High Tops</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvshollywoohistory/index.m3u8" href="javascript:void(0);">TVS Hollywood History</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsmainst/index.m3u8" href="javascript:void(0);">TVS Main Street</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-nostalgia/index.m3u8" href="javascript:void(0);">TVS Nostalgia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvsNostalgiaMovies/index.m3u8" href="javascript:void(0);">TVS Nostalgia Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvssports/index.m3u8" href="javascript:void(0);">TVS Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tavern/index.m3u8" href="javascript:void(0);">TVS Tavern</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsturbo/index.m3u8" href="javascript:void(0);">TVS Turbo</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvstn/index.m3u8" href="javascript:void(0);">TVS TV Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvswesternmovies/index.m3u8" href="javascript:void(0);">TVS Western Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvswsn/index.m3u8" href="javascript:void(0);">TVS Women Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:TVWAIR_all/chucklist.m3u8" href="javascript:void(0);">TVW</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:TVW2_all/master.m3u8" href="javascript:void(0);">TVW-2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://iphone-streaming.ustream.tv/uhls/1524/streams/live/iphone/playlist.m3u8" href="javascript:void(0);">TWiT</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-all23.secdn.net/pegstream3-live/play/65ea794b-dd82-41ce-8e98-a9177289a063/master.m3u8" href="javascript:void(0);">UALR TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=379&f=.m3u8" href="javascript:void(0);">UFC Fight Pass</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcliveunivsecure-lh.akamaihd.net/i/un150_A1_1@575439/index_1328_av-b.m3u8?fluxustv.m3u8" href="javascript:void(0);">UN Web TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=380&f=.m3u8" href="javascript:void(0);">Universal Kids (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=345&f=.m3u8" href="javascript:void(0);">Universal Kids (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/UrbanMusic4U/playlist.m3u8" href="javascript:void(0);">Urban Music 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=381&f=.m3u8" href="javascript:void(0);">USA Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://vanadium.uww.edu:1935/uwwlive/smil:uwwtv.smil/chunklist_w2102626622_b300000.m3u8" href="javascript:void(0);">UWW-TV UW Whitewater</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://api.new.livestream.com/accounts/22774234/events/6897936/live.m3u8?fluxustv.m3u8" href="javascript:void(0);">Vegas Stats</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content-ausc2.uplynk.com/channel/7a16e3d5ffd0413ba4d8ac89688ed7cd/e.m3u8?ct=c&ad.locationDesc=vh1_channel&ad.cust_params=_fw_ae%3D53da17a30bd0d3c946a41c86cb5873f1%26_vmn_ar%3Dtrue&expand=simulcast_standard&ad.kv=_fw_ae%2C53da17a30bd0d3c946a41c86cb5873f1%2C_vmn_ar%2Ctrue%2C_fw_vcid2%2C82125:vh1_67b04b0c30774b06ad1ec820ee7d0beb&delay=10800&euid=67b04b0c-3077-4b06-ad1e-c820ee7d0beb&exp=1531977295&rn=1284714433&ad.euid=67b04b0c-3077-4b06-ad1e-c820ee7d0beb&cid=7a16e3d5ffd0413ba4d8ac89688ed7cd&tc=1&sig=b3143cb0429574cc3c877de30e62fab7d66c763ec2f61cd9bfde33fdab12dfb7&pbs=62317bc417264eaeb05c22777b5c8697" href="javascript:void(0);">VH1 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=383&f=.m3u8" href="javascript:void(0);">VH1 (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=384&f=.m3u8" href="javascript:void(0);">Vice</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://voa-lh.akamaihd.net/i/voa_mpls_tvmc3_3@320295/master.m3u8" href="javascript:void(0);">Voice of America (EST)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://voa-lh.akamaihd.net/i/voa_mpls_tvmc6@320298/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">Voice of America (PST)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wusa-lh.akamaihd.net/i/WUSA_Breaking_1@98930/master.m3u8" href="javascript:void(0);">Washington DC: CBS 9 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://api.new.livestream.com/accounts/2363281/events/1763520/live.m3u8" href="javascript:void(0);">Washington DC: Fox 5 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wrclive-f.akamaihd.net/i/wrcb1_1@46880/master.m3u8" href="javascript:void(0);">Washington DC: NBC 4 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wrclive-f.akamaihd.net/i/wrcb2_1@46880/master.m3u8" href="javascript:void(0);">Washington DC: Telemundo 44</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://worcester.vod.castus.tv/live/ch1.m3u8?fluxustv.m3u8" href="javascript:void(0);">WCCA TV Worcester (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=387&f=.m3u8" href="javascript:void(0);">WCCA TV Worcester (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=385&f=.m3u8" href="javascript:void(0);">We TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/weather4u/playlist.m3u8" href="javascript:void(0);">Weather 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdnapi.kaltura.com/p/931702/sp/93170200/playManifest/entryId/1_oorxcge2/format/applehttp/protocol/http/uiConfId/28428751/a.m3u8" href="javascript:void(0);">Weather Nation (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=370&f=.m3u8" href="javascript:void(0);">Weather Nation (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hls.iptv.optimum.net/news12/nipadlive/index_new.m3u8?callsign=N12WH_WESTCHESTER" href="javascript:void(0);">Westchester: News 12</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashmedia.tv/onestudio/western4u/playlist.m3u8" href="javascript:void(0);">Westerns 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.swagit.com/live-edge/whiteplainsny/smil:std-4x3-1-b/chunklist_w1456643228_b512000.m3u8" href="javascript:void(0);">White Plains Community Media</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcndmtv.teleosmedia.com/stream/dmtv/whomagmultimedia/seglist_720p.m3u8" href="javascript:void(0);">Who?Mag TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/winktv/playlist.m3u8" href="javascript:void(0);">Wink TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/44.1/1280x720?start_time=2019-12-11T20%3A45%3A00.000Z&end_time=2026&env=prd&uid=29375" href="javascript:void(0);">WMCN 44 Philadelphia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://player-api.new.livestream.com/accounts/1194911/events/3466400/live.m3u8" href="javascript:void(0);">WMFD 68 Ohio</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wfc.bonus-tv.ru:80/cdn/wfcint/tracks-v2a1/index.m3u8" href="javascript:void(0);">World Fashion TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://streamengine.wosn.tv:1935/live/WOSNLive_1/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">WOSN Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://v-pi.mybtv.net/event/24.1/640x480?start_time=2019-12-11T20%3A45%3A00.000Z&end_time=2033&env=prd&uid=29375" href="javascript:void(0);">WPHA 38 Philadelphia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wsjlivehls-lh.akamaihd.net/i/events1_1@174990/master.m3u8" href="javascript:void(0);">WSJ Live (VOD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dcunilive30-lh.akamaihd.net/i/dclive_1@534251/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">WSVI-TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=388&f=.m3u8" href="javascript:void(0);">WWE Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://vcnxcorps.teleosmedia.com/stream/xcorps/xcorps/seglist_720p.m3u8" href="javascript:void(0);">Xcorps TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://claro2-pi-dns.herokuapp.com/master.php?id=389&f=.m3u8" href="javascript:void(0);">YES Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://imavex2.mmdlive.lldns.net/imavex2/46320b2319cf49d7bf68f70cc4a10c98/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Youtoo America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://y5w8j4a9.ssl.hwcdn.net/zlivingusa_r/index.m3u8" href="javascript:void(0);">Z Living (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://y5w8j4a9.ssl.hwcdn.net/zlivingusa_r_prod/tracks-v1a1/index.m3u8" href="javascript:void(0);">Z Living (Opt-2)</a>
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
