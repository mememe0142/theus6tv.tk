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
               <a class="channel nav-link" data-value="https://y5w8j4a9.ssl.hwcdn.net/andprivehd/tracks-v1a1/index.m3u8" href="javascript:void(0);">&privé HD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rockentertainment-zoomoo-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">ZooMoo</a>
            </li>	
			<li class="nav-item">
               <a class="channel nav-link" data-value="http://persik.by/stream/6696/480248/10240.m3u8" href="javascript:void(0);">Movi</a>
            </li>			
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/ff809e6d9ec34109abfb333f0d4444b5.m3u8" href="javascript:void(0);">23 ABC (KERO)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnyellowspot.teleosmedia.com/stream/yellowspot/super-geek-heros/seglist_720p.m3u8?fluxustv.m3u8" href="javascript:void(0);">24/7 Super Geek Heroes</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/music.m3u8?fluxustv.m3u8" href="javascript:void(0);">30A Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/my999.m3u8" href="javascript:void(0);">30A TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/my999.m3u8?fluxustv.m3u8" href="javascript:void(0);">30A TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://30a-tv.com/my999.m3u8" href="javascript:void(0);">30A TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://30a-tv.com/music.m3u8" href="javascript:void(0);">30A TV MUSIC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://moiptvhls-i.akamaihd.net/hls/live/652315/secure/master.m3u8" href="javascript:void(0);">3ABN Latino</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni5rtmp.tulix.tv:1935/bettervida/bettervida/playlist.m3u8" href="javascript:void(0);">3ABN Latino</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.4fun.tv:8888/hls/4f_high/index.m3u8" href="javascript:void(0);">4FUN TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://158.69.124.9:1935/5aabtv/5aabtv/playlist.m3u8" href="javascript:void(0);">5AAB TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://158.69.124.9:1935/5aabtv/5aabtv/chunklist.m3u8" href="javascript:void(0);">5AAB TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://securecontributions.sechls01.visionip.tv/live/securecontributions-securecontributions-92_news-hsslive-25f-16x9-SD/chunklist.m3u8" href="javascript:void(0);">92 News UK</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bk7l2w4nlx53-hls-live.5centscdn.com/AETV/514c04b31b5f01cf00dd4965e197fdda.sdp/playlist.m3u8" href="javascript:void(0);">A&E (Best of)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cms-wowza.lunabyte.io/wbrz-live-1/_definst_/smil:wbrz-live.smil/chunklist_b1300000.m3u8" href="javascript:void(0);">ABC 2 Baton Rouge LA (WBRZ-HD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2nt5wxzqbe1ad.cloudfront.net/out/raycom-wwsb1-hls/live.m3u8" href="javascript:void(0);">ABC 7 Sarasota FL (WWSB)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wftv.cmgvideo.com/wftv/2564k/index.m3u8" href="javascript:void(0);">ABC 9 Orlando FL (WFTV-HD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/3324f2467c414329b3b0cc5cd987b6be.m3u8" href="javascript:void(0);">ABC News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://abclive1-lh.akamaihd.net/i/abc_live07@423401/master.m3u8" href="javascript:void(0);">ABC News Digital 7</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://120sports-accdn-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">ACC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/acc.m3u8" href="javascript:void(0);">ACC Network (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rakuten-actionmovies-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Action Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wjax.cmgvideo.com/wjax/2564k/index.m3u8" href="javascript:void(0);">Action News Jax (WJAX-TV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-adventuresportsnetwork/CDN/768x432_1200000/index.m3u8" href="javascript:void(0);">Adventure Sports Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.ecable.tv/afrobeats/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Afrobeats</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://linear-12.frequency.stream/dist/roku/12/hls/master/playlist.m3u8" href="javascript:void(0);">AFV Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://109.123.126.14:1935/live/livestream1.sdp/chunklist.m3u8" href="javascript:void(0);">Ahlulbayt TV</a>
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
               <a class="channel nav-link" data-value="https://video.blivenyc.com/broadcast/2061/22/file-858k.m3u8" href="javascript:void(0);">AKC TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://video.blivenyc.com/broadcast/prod/2061/22/desktop-playlist.m3u8" href="javascript:void(0);">AKC TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alaraby.cdn.octivid.com/alaraby/smil:alaraby.stream.smil/chunklist_b2500000.m3u8" href="javascript:void(0);">Al Araby (GB)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://mbnhls-lh.akamaihd.net/i/MBN_1@118619/master.m3u8" href="javascript:void(0);">Al Hurra (IQ) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://mbningestworld-i.akamaihd.net/hls/live/586122/worldsafe/master_2596.m3u8" href="javascript:void(0);">Al Hurra (IQ) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn-hls.globecast.tv/live/ramdisk/al_maghribia_snrt/hls_snrt/index.m3u8" href="javascript:void(0);">Al Maghribia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://mdnlv.cdn.octivid.com/almdn/smil:mpegts.stream.smil/chunklist_b1300000_t64NTc2cA==.m3u8" href="javascript:void(0);">Al Mayadeen (LB) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livestreamcdn.net:1935/AlientoSD/smil:AlientoSD.smil/playlist.m3u8" href="javascript:void(0);">Aliento Vision</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://endemol-alldrama-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">All Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-americasfunniesthomevideos/CDN/playlist.m3u8?p=roku" href="javascript:void(0);">America's Funniest Videos</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-americasfunniesthomevideos/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">America's Funniest Videos</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/americanclassictv/chunks.m3u8" href="javascript:void(0);">American Classic Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/americanclassictv/playlist.m3u8" href="javascript:void(0);">American Classic Network (480p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/americanclassictv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">American Classic TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-redboxamericanclassics/CDN/playlist.m3u8" href="javascript:void(0);">American Classics</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://170.178.189.66:1935/live/Stream1/playlist.m3u8" href="javascript:void(0);">American Horrors</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://170.178.189.66:1935/live/Stream1/.m3u8" href="javascript:void(0);">American Horrors</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-2.streamhoster.com/pl_138/201660-1270634-1/playlist.m3u8" href="javascript:void(0);">AMG TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-2.streamhoster.com/pl_138/201660-1270634-1/chunklist.m3u8" href="javascript:void(0);">AMGTV (EST)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live-aac.cablecast.tv/live/WIFI-1296k-540p/WIFI-1296k-540p.m3u8" href="javascript:void(0);">Anne Arundel TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/applesaucetv/chunks.m3u8" href="javascript:void(0);">Apple Sauce TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://amdlive.ctnd.com.edgesuite.net/arirang_1ch/smil:arirang_1ch.smil/playlist.m3u8" href="javascript:void(0);">Arirang (KR) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn-01.bonus-tv.ru:8080/arirang_edge/index.m3u8" href="javascript:void(0);">Arirang (KR) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://news.ashttp9.visionip.tv/live/visiontvuk-news-arise-tv-hsslive-25f-16x9-SD/chunklist.m3u8" href="javascript:void(0);">Arise News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ac-samsung.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Asiancrush</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/ACVBHD/chucklist.m3u8" href="javascript:void(0);">Atlanta Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-auftv/index.m3u8" href="javascript:void(0);">AUF TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live1/awe_720p/chunks.m3u8" href="javascript:void(0);">AWE</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dl.dropboxusercontent.com/s/emp7q8g3tc1kikj/BMusik.m3u8?dl=0" href="javascript:void(0);">Baeble Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cms-wowza.lunabyte.io/wbrz-live-1/_definst_/smil:wbrz-live.smil/chunklist_b1300000.m3u8?fluxustv.m3u8" href="javascript:void(0);">Baton Rouge: WBRZ 2 Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3mxmx98etcevi.cloudfront.net/playlist.m3u8" href="javascript:void(0);">Baywatch</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://start.agmediachandigarh.com/gaundapunjab/tv/playlist.m3u8" href="javascript:void(0);">BBC Toronto Gaunda Punjab</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://103.199.161.254/Content/bbcworld/Live/Channel(BBCworld)" href="javascript:void(0);">BBC World News (GB) (Opt-3)</a>
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
               <a class="channel nav-link" data-value="https://beanostudios-beanotv-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Beano TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lsqvc4us-lh.akamaihd.net/i/lsqvc4us_01@802711/master.m3u8" href="javascript:void(0);">Beauty IQ</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bein-plutolive-vo.akamaized.net/playlist.m3u8" href="javascript:void(0);">beIN SPORTS XTRA (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wowzaprod188-i.akamaihd.net/hls/live/728897/54d0bcd5/playlist.m3u8" href="javascript:void(0);">Bek Sports East</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wowzaprod188-i.akamaihd.net/hls/live/728897/89b077e6/playlist.m3u8" href="javascript:void(0);">Bek Sports West</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content.jwplatform.com/manifests/vM7nH0Kl.m3u8" href="javascript:void(0);">Beto TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni5rtmp.tulix.tv:1935/betterhealth/betterhealth/playlist.m3u8" href="javascript:void(0);">Better Health TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni5rtmp.tulix.tv:1935/betterlife/betterlife/playlist.m3u8" href="javascript:void(0);">Better Life TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni5rtmp.tulix.tv:1935/betternature/betternature/playlist.m3u8" href="javascript:void(0);">Better Nature TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.iphonewebtown.com:1935/bibleexplorations/bexplorationsmobile.stream/playlist.m3u8" href="javascript:void(0);">Bible Explorations</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alchimie-big-names-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Big Names</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://biglife.sinclair.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">BigLife TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-billycboxing/index.m3u8" href="javascript:void(0);">Billy C Boxing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stitcher.pluto.tv/stitch/hls/channel/561c5b0dada51f8004c4d855/master.m3u8?deviceType=web&deviceMake=Chrome&deviceModel=Chrome&sid=6e360db0-724b-11e8-be77-bf4d1417b012&deviceId=889540f0-712d-11e8-b9ec-8ba319deeadf&deviceVersion=37.0.2049.0&appVersion=2.0.0&deviceDNT=0&userId=&advertisingId=&deviceLat=38.5783&deviceLon=-90.6666&app_name=&appName=&appStoreUrl=&serverSideAds=true" href="javascript:void(0);">Black Cinema</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/black-jesus/stream.m3u8" href="javascript:void(0);">Black Jesus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://blacknewschannel-vizio.amagi.tv/playlist.m3u8" href="javascript:void(0);">Black News Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://theblaze4.akamaized.net/hls/live//699982/theblaze/cm-dvr/master.m3u8" href="javascript:void(0);">Blaze TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodeuwest.global.ssl.fastly.net/btv/desktop/eu_live.m3u8" href="javascript:void(0);">Bloomberg EU</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodeuwest.global.ssl.fastly.net/btv/desktop/eu_event.m3u8" href="javascript:void(0);">Bloomberg EU Event</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveproduseast.global.ssl.fastly.net/btv/desktop/us_politics.m3u8" href="javascript:void(0);">Bloomberg Politics</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveproduseast.global.ssl.fastly.net/btv/desktop/us_live.m3u8" href="javascript:void(0);">Bloomberg Television (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn-videos.akamaized.net/btv/desktop/akamai/us/live/primary.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveproduseast.global.ssl.fastly.net/us/Channel-USTV-AWS-virginia-1/Source-USTV-240-1_live.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveproduseast.akamaized.net/btv/desktop/us_live.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn-videos.akamaized.net/btv/desktop/akamai/europe/live/primary.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdn-videos.akamaized.net/btv/desktop/fastly/asia/live/primary.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://liveproduseast.akamaized.net/us/Channel-USTV-AWS-virginia-1/Source-USTV-1000-1_live.m3u8" href="javascript:void(0);">Bloomberg TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodapnortheast.global.ssl.fastly.net/btv/desktop/ap_live.m3u8" href="javascript:void(0);">Bloomberg TV Asia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodapnortheast.global.ssl.fastly.net/btv/desktop/ap_event.m3u8" href="javascript:void(0);">Bloomberg TV Asia Live Event</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodapnortheast.global.ssl.fastly.net/oz1/Channel-OZTVqvs-AWS-tokyo-1/Source-OZTVqvs-1000-1_live.m3u8" href="javascript:void(0);">Bloomberg TV Australia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodapnortheast.global.ssl.fastly.net/btv/desktop/aus_live.m3u8" href="javascript:void(0);">Bloomberg TV Australia</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveprodeuwest.akamaized.net/eu1/Channel-EUTVqvs-AWS-ireland-1/Source-EUTVqvs-1000-1_live.m3u8" href="javascript:void(0);">Bloomberg TV Europe</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://liveprodeucentral.global.ssl.fastly.net/btv/desktop/eu_live.m3u8" href="javascript:void(0);">Bloomberg TV Europe</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://liveproduseast.akamaized.net/btv/desktop/us_event.m3u8" href="javascript:void(0);">Bloomberg TV Live Event</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bloomberg-bloombergtv-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Bloomberg+ 4K</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/blugrassmusic/blugrassmusic/playlist.m3u8" href="javascript:void(0);">Bluegrass 4U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-bluegrassmusic4u/index.m3u8" href="javascript:void(0);">Bluegrass 4U (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/blushtv/chunks.m3u8" href="javascript:void(0);">Blush Romance TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/blushtv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Blush TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://27.254.130.56:80/live01/ch18.m3u8" href="javascript:void(0);">Boomerang</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wfxt.cmgvideo.com:80/wfxt/2564k/index.m3u8" href="javascript:void(0);">Boston 25 News (WFXT)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcsecurelivehls-i.akamaihd.net/hls/live/598046/4744899807001_1/livestream/master.m3u8" href="javascript:void(0);">Boston: 7News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wfxt.cmgvideo.com/wfxt/2564k/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Boston: Fox News 25 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/teleyupp/teleup-bounce/playlist.m3u8" href="javascript:void(0);">Bounce</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,boxhits-desktop.m3u8?yo.up=http%3a%2f%2fboxtv-origin-elb.cds1.yospace.com%2fuploads%2fboxhits%2f" href="javascript:void(0);">Box Hits</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/IdHTuehZQPClis-gJaZkFQ/master.m3u8" href="javascript:void(0);">BritCom</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/d5b47/+0000/low/c.m3u8" href="javascript:void(0);">Brut.</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-all15.secdn.net/pegstream3-live/play/c3e1e4c4-7f11-4a54-8b8f-c590a95b4ade/playlist.m3u8" href="javascript:void(0);">Buffalo TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://butv10-livestream.bu.edu/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8" href="javascript:void(0);">BUTV10 BU</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/d5b46/+0000/high/c.m3u8" href="javascript:void(0);">BYUtv</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC1_1@500806/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">C-SPAN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC1_1@500806/master.m3u8" href="javascript:void(0);">C-Span</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/teleyupp/teleup-cspan/playlist.m3u8" href="javascript:void(0);">C-SPAN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC2_1@500807/master.m3u8" href="javascript:void(0);">C-Span 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC2_1@500807/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">C-SPAN 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC3_1@500808/master.m3u8" href="javascript:void(0);">C-Span 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skystreams-lh.akamaihd.net/i/SkyC3_1@500808/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">C-SPAN 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMC-TV/.m3u8" href="javascript:void(0);">California Music Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMC-TV/CMC-TV.m3u8" href="javascript:void(0);">California Music Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-camerasmile/index.m3u8" href="javascript:void(0);">Camera Smile (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn8.live247stream.com/canadaone/tv/playlist.m3u8" href="javascript:void(0);">Canada One</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.canadastartv.com:1935/canadastartv/canadastartv/playlist.m3u" href="javascript:void(0);">Canada Star TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.elahmad.com/tv/m3u8/fr_xoyky_49.m3u8?id=algerie" href="javascript:void(0);">Canal Algérie</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-us-se13.secdn.net/pegstream3-live/play/5f0d9ca5-4e85-4c01-a426-9ec8d44c2c9c/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Capital City Connection Montgomery</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://catholictvhd-lh.akamaihd.net:80/i/ctvhd_1@88148/master.m3u8" href="javascript:void(0);">Catholic TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://51.52.156.22:8888/http/003" href="javascript:void(0);">Cbeebies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bcliveuniv-lh.akamaihd.net/i/iptv2_1@194050/master.m3u8" href="javascript:void(0);">CBN Español</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcliveunivsecure-lh.akamaihd.net/i/iptv1_1@500579/master.m3u8" href="javascript:void(0);">CBN Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bcliveuniv-lh.akamaihd.net:80/i/news_1@194050/master.m3u8" href="javascript:void(0);">CBN News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bcliveuniv-lh.akamaihd.net/i/iptv1_1@194050/master.m3u8" href="javascript:void(0);">CBN News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcliveunivsecure-lh.akamaihd.net/i/news_1@500579/master.m3u8" href="javascript:void(0);">CBN News Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cbsnewshd-lh.akamaihd.net/i/CBSNHD_7@199302/master.m3u8" href="javascript:void(0);">CBS News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/Sid4xiTQTkCT1SLu6rjUSQ/master.m3u8?iu=/8264/vaw-can/mobile_web/cbsnews_mobile" href="javascript:void(0);">CBS News (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/26FJK7wRSo6RhPsK70XS_w/master.m3u8?iu=/4128/CBS.BOSTON.OTT" href="javascript:void(0);">CBS News Boston</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/rtcMlf4RTvOEkaudeany5w/master.m3u8?iu=/4128/CBS.NY.OTT" href="javascript:void(0);">CBS News New York</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cbsnhls-i.akamaihd.net/hls/live/264710/CBSN_mdialog/prodstream/master.m3u8" href="javascript:void(0);">CBSN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cbsnhls-i.akamaihd.net/hls/live/264710/CBSN_mdialog/prodstream/master_2200.m3u8" href="javascript:void(0);">CBSN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus3-a.akamaihd.net/charlotte/G0055_002/chunklist.m3u8" href="javascript:void(0);">CC-TV Charlotte County</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://156.142.85.152/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8?fluxustv.m3u8" href="javascript:void(0);">CCX Media Minnesota</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://156.142.85.152/live/WIFI-2096k-1080p/WIFI-2096k-1080p.m3u8" href="javascript:void(0);">CCX1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-celebrityscene/index.m3u8" href="javascript:void(0);">Celebrity Scene (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playout4multirtmp.tulix.tv/live8/Stream1/playlist.m3u8" href="javascript:void(0);">Celebrity Scene TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus4-a.akamaihd.net/cerritos/G0010_002/chunklist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cerritos TV3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.cgtn.com/500/prog_index.m3u8" href="javascript:void(0);">CGTN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.cgtn.com/1000/prog_index.m3u8" href="javascript:void(0);">CGTN (CN) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live-champaign.cablecast.tv/live/CELL-296k-234p/CELL-296k-234p.m3u8" href="javascript:void(0);">CGTV Champaign</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.creacast.com/cna/smil:cna.smil/chunklist_w1780122037_b864000.m3u8" href="javascript:void(0);">Chaine Nord Africaine</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://radio.7chan.org:8000/CH7" href="javascript:void(0);">Channel 7</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://usgeowall.sinclairstoryline.com/channel/37eb732888614810b512fdd82604244e.m3u8" href="javascript:void(0);">Charge! (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wcnc-lh.akamaihd.net/i/WCNC_Breaking_1@195112/master.m3u8" href="javascript:void(0);">Charlotte: WCNC Breaking News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wxintribune-lh.akamaihd.net/i/WXINTribune_1@120151/master.m3u8" href="javascript:void(0);">Chattanooga: ABC 9 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.chdrstatic.com/cheddar/primary/1.m3u8" href="javascript:void(0);">Cheddar</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/4ee18bd581dc4d3b90303e0cb9beeb0f.m3u8" href="javascript:void(0);">Cheddar</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.chdrstatic.com/cbn/primary/1.m3u8" href="javascript:void(0);">Cheddar Big News</a>
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
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/4df1bf71c1/+0000/high/c.m3u8" href="javascript:void(0);">Chive TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media.smc-host.com:1935/cycnow.com/cyc2/chunklist_w258510680.m3u8" href="javascript:void(0);">Christian Youth Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media.smc-host.com:1935/cycnow.com/cyc2/chunklist_w884806316.m3u8" href="javascript:void(0);">Christian Youth Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://circle-samsung.amagi.tv/playlist.m3u8" href="javascript:void(0);">Circle</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d1ilhlah7f9uzc.cloudfront.net/playlist.m3u8" href="javascript:void(0);">Clarity 4K</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d3s1xaoyhrialn.cloudfront.net/CAS/index.m3u8" href="javascript:void(0);">Classic Arts Showcase</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-classiccinema/index.m3u8" href="javascript:void(0);">Classic Cinema</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stitcher.pluto.tv/stitch/hls/channel/569546031a619b8f07ce6e25/master.m3u8?deviceType=web&deviceMake=Chrome&deviceModel=Chrome&sid=6e360db0-724b-11e8-be77-bf4d1417b012&deviceId=889540f0-712d-11e8-b9ec-8ba319deeadf&deviceVersion=37.0.2049.0&appVersion=2.0.0&deviceDNT=0&userId=&advertisingId=&deviceLat=38.5783&deviceLon=-90.6666&app_name=&appName=&appStoreUrl=&serverSideAds=true" href="javascript:void(0);">Classic Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://b83608fe932143099bb8b25a66857730.mediatailor.us-east-1.amazonaws.com/v1/master/82ded7a88773aef3d6dd1fedce15ba2d57eb6bca/wse_powr_com_5f86075a0d552957bf5aa4dd/playlist.m3u8" href="javascript:void(0);">Classic Movies Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://clubbingtv-samsunguk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Clubbing TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMC-TV/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">CMC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMC-TV/playlist.m3u8" href="javascript:void(0);">CMC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMCU-92/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">CMC-USA</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cmctv.ios.internapcdn.net/cmctv_vitalstream_com/live_1/CMCU-92/playlist.m3u8" href="javascript:void(0);">CMC-USA - github.com/Free-IPTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2e1asnsl7br7b.cloudfront.net/7782e205e72f43aeb4a48ec97f66ebbe/index_5.m3u8" href="javascript:void(0);">CNA HD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cnbctv18-lh.akamaihd.net/i/cnbctv18_1@174868/index_5_av-p.m3u8" href="javascript:void(0);">CNBC TV18</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cnbctv18-lh.akamaihd.net/i/cnbctv18_1@174868/index_5_av-p.m3u8?sd=10" href="javascript:void(0);">CNBC TV18</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cnn-cnninternational-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">CNN Int. (UK)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://uksono1-samsunguk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Comedy Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rakuten-comedymovies-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Comedy Movies</a>
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
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/web1stream/chunklist_w1992415243_DVR.m3u8" href="javascript:void(0);">Connecticut Network (Live Stream 1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.ct-n.com/live/web2stream/chunklist_w1202315245_DVR.m3u8" href="javascript:void(0);">Connecticut Network (Live Stream 2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cinedigm.vo.llnwd.net/conssui/amagi_hls_data_xumo123-contv/CDN/master.m3u8" href="javascript:void(0);">CONtv</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cinedigm.vo.llnwd.net/conssui/amagi_hls_data_xumo123-contv/CDN/1280x720_2108000/chunklist.m3u8" href="javascript:void(0);">ConTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/countrymusic4u/countrymusic4u/playlist.m3u8" href="javascript:void(0);">Country Music 4U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/teleyupp/teleup-mystery/playlist.m3u8" href="javascript:void(0);">Court TV Mystery</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcsecurelivehls-i.akamaihd.net/hls/live/680602/1242843915001_1/master.m3u8" href="javascript:void(0);">CPAC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://aenetworks-crime360-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Crime 360</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d2c571faeb3e2738ae27933/master.m3u8?terminate=false&deviceType=web&deviceMake=web&deviceModel=web&sid=470&deviceId=5d2c571faeb3e2738ae27933&deviceVersion=DNT&appVersion=DNT&deviceDNT=0&userId=&advertisingId=&deviceLat=&deviceLon=&app_name=&appName=web&buildVersion=&appStoreUrl=&architecture=&includeExtendedEvents=false&marketingRegion=US&serverSideAds=false" href="javascript:void(0);">Crime TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/cruise_tv/hls_video/index.m3u8" href="javascript:void(0);">Cruise1st TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/cruise_tv/hls_video/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Cruise1st TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media.smc-host.com:1935/csat.tv/smil:csat.smil/chunklist_w1421926306_b692000_slar_t64SEQ=.m3u8" href="javascript:void(0);">CSat TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dhtv5.csudh.edu:1935/live/myStream/playlist.m3u8" href="javascript:void(0);">CSUDH TV (Dominguez Hills)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rrsatrtmp.tulix.tv/ctntv/ctntvmulti.smil/chunklist_w846886780_b1764000.m3u8?fluxustv.m3u8" href="javascript:void(0);">CTN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rtmp.ottdemo.rrsat.com/ctntv/ctntvmulti.smil/chunklist.m3u8" href="javascript:void(0);">CTN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://admin.ottdemo.rrsat.com:1935/ctntv/ctntv2/playlist.m3u8" href="javascript:void(0);">CTN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://184.164.158.202:1936/48/smil:48.smil/playlist.m3u8?iptvgratis?chile.m3u8" href="javascript:void(0);">CTNi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://184.164.158.202:1936/48/smil:48.smil/playlist.m3u8" href="javascript:void(0);">CTNi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/3e5befe5dd/+0000/high/c.m3u8" href="javascript:void(0);">Cycle World</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcndstv.teleosmedia.com/stream/dstv/dstv/seglist_720p.m3u8" href="javascript:void(0);">Dancestar TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dangertv.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Danger TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/darcizzle.m3u8" href="javascript:void(0);">Darcizzle Offshore</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcsecurelivehls-i.akamaihd.net/hls/live/621275/1539097700001/master.m3u8" href="javascript:void(0);">Daystar TV</a>
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
               <a class="channel nav-link" data-value="http://nicls1-lh.akamaihd.net/i/ddnews_1@409133/master.m3u8" href="javascript:void(0);">DD News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bit.ly/2m4L4mi" href="javascript:void(0);">DD News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus8-a.akamaihd.net/denver/G0080_002/chunklist.m3u8" href="javascript:void(0);">Denver 8 TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content-auso2.uplynk.com/channel/9c9e4e410b5a471391c116166d8c010e.m3u8?ad=live" href="javascript:void(0);">Detroit: ABC 7 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://discoverfilm-discoverfilm-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Discover.Film</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://video.oct.dc.gov/out/u/DCN.m3u8" href="javascript:void(0);">District of Columbia Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://azroe0x-lh.akamaihd.net/i/test_1@775856/master.m3u8" href="javascript:void(0);">Ditty TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://divineplayout-us2.tulix.tv/live/Stream1/.m3u8" href="javascript:void(0);">Divine Vision</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://endemol-restore-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Diy Daily</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.djing.com/tv/live.m3u8" href="javascript:void(0);">DJing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.djing.com/tv/animation.m3u8" href="javascript:void(0);">DJing Animation</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.djing.com/tv/classics.m3u8" href="javascript:void(0);">DJing Classic</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.djing.com/tv/hits.m3u8" href="javascript:void(0);">DJing Classics</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://djing.com/tv/dancefloor.m3u8" href="javascript:void(0);">DJing Dance Floor</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.djing.com/tv/04.m3u8" href="javascript:void(0);">DJing Hits</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.djing.com/tv/buster-poindexter-his-banshees-of-blue-hot-hot-hot/index.m3u8" href="javascript:void(0);">DJing Hot Hot Hot</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.djing.com/tv/h-01-fta.m3u8" href="javascript:void(0);">DJing Hot Hot Hot</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.djing.com/tv/karaoke.m3u8" href="javascript:void(0);">DJing Karaoke</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.djing.com/tv/underground.m3u8" href="javascript:void(0);">DJing Underground</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://94.246.128.53:1935/tv/_definst_/dlaCiebieTv/playlist.m3u8" href="javascript:void(0);">dlaCiebie TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://0813a4e76b5d404a97a4070b8e087bc4.mediatailor.us-east-1.amazonaws.com/v1/master/82ded7a88773aef3d6dd1fedce15ba2d57eb6bca/wse_powr_com_5f8609d9d6344257cbfb6ee4/playlist.m3u8" href="javascript:void(0);">Docs Channel TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://docubaylivestreams.akamaized.net/526a07ab-6ae7-4b6c-84a1-159791416484_1000004370_HLS/manifest.m3u8" href="javascript:void(0);">Docubay</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cinedigm.vo.llnwd.net/conssui/amagi_hls_data_xumo1234A-docuramaA/CDN/master.m3u8" href="javascript:void(0);">Docurama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dovenow.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Dove Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cinedigm.vo.llnwd.net/conssui/amagi_hls_data_xumo1234A-dovenow/CDN/master.m3u8" href="javascript:void(0);">Dove Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wescottcchls-lh.akamaihd.net/i/wcc_wowlivehls@24607/master.m3u8" href="javascript:void(0);">Dr. Gene Scott</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rakuten-tvshows-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/DREAM-CORP-LLC/stream.m3u8" href="javascript:void(0);">Dream Corp LLC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://drybar-drybarcomedy-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">DryBar Comedy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dust-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Dust</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dust.sinclair.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Dust</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dwstream2-lh.akamaihd.net/i/dwstream2_live@124400/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">DW (DE)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dwstream4-lh.akamaihd.net/i/dwstream4_live@131329/master.m3u8" href="javascript:void(0);">DW (DE) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://imgedge.akamaized.net/amagi_hls_data_imgAAA2AA-edgesports/CDN/playlist.m3u8" href="javascript:void(0);">Edge Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/vf93fRSk7/playlist_360p.m3u8" href="javascript:void(0);">ElectricNOW</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://emci-td-hls.akamaized.net/hls/live/2007264/emcitdhls/index.m3u8" href="javascript:void(0);">EMCI TV Montreal (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://zypelive-lh.akamaihd.net/i/default_1@710948/master.m3u8" href="javascript:void(0);">ESNE TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/fs2.m3u8" href="javascript:void(0);">ESPN (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/espn2.m3u8" href="javascript:void(0);">ESPN 2 (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/espnews.m3u8" href="javascript:void(0);">ESPN News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gma2.blab.email/espnu.m3u8" href="javascript:void(0);">ESPN U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://esr-samsung.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">ESR Esports 24x7</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rakuten-euronews-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Euronews</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://aos01-evine.secure.footprint.net/evine/dirty/Evine_Dirty_VIDEO_1_2064000.m3u8" href="javascript:void(0);">Evine</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://dyo5cp96eopax.cloudfront.net/p/CANE_760x432_1200k.m3u8" href="javascript:void(0);">EWTN Canada</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tvsn-i.akamaihd.net/hls/live/261837/expo/expo_750.m3u8" href="javascript:void(0);">Expo Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/7tuuoX1wSsCTaki1HqJFYw/master.m3u8" href="javascript:void(0);">Fail Army</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-failarmy/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">FailArmy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://failarmy-international-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Failarmy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cs.ebmcdn.net/eastbay-live-hs-1/fairfax-pull/_definst_/mp4:fairfax.stream/chunklist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Fairfax Public Access</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-all9.secdn.net/logos-channel/live/faithlifetv/playlist.m3u8" href="javascript:void(0);">Faith & Life TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rakuten-family-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Family Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://entertainment.ashttp9.visionip.tv/live/visiontvuk-entertainment-edgytv-hsslive-25f-16x9-SD/chunklist.m3u8" href="javascript:void(0);">Fashion TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live3/fido_720p/chunks.m3u8" href="javascript:void(0);">Fido TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22696/+0000/low/c.m3u8" href="javascript:void(0);">Fighting Spirit</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.filmon.com/vr-streams/4136.high/playlist.m3u8" href="javascript:void(0);">Filmon 360</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-filmriseclassictv/CDN/648x432_5000000/index.m3u8" href="javascript:void(0);">Filmrise Classics</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-filmrisecrime/CDN/640x432_2500000/index.m3u8" href="javascript:void(0);">Filmrise Crime</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-filmrisecrime/CDN/640x432_5000000/index.m3u8" href="javascript:void(0);">Filmrise Crime</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-filmrisefamily/CDN/1280x720_5000000/chunklist.m3u8" href="javascript:void(0);">Filmrise Family</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-filmrisefreemovies/CDN/1280x720_5000000/chunklist.m3u8" href="javascript:void(0);">Filmrise Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://spi-filmstream-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Filmstream</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://filmzie-filmzie-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Filmzie</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-TVSFlashback/index.m3u8" href="javascript:void(0);">Flashback TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stitcher.pluto.tv/stitch/hls/channel/58e55b14ad8e9c364d55f717/master.m3u8?deviceType=web&deviceMake=Chrome&deviceModel=Chrome&sid=2da9e920-7245-11e8-9b3e-a1006a2fd228&deviceId=889540f0-712d-11e8-b9ec-8ba319deeadf&deviceVersion=37.0.2049.0&appVersion=2.0.0&deviceDNT=0&userId=&advertisingId=&deviceLat=38.5783&deviceLon=-90.6666&app_name=&appName=&appStoreUrl=&serverSideAds=true" href="javascript:void(0);">Flicks of Fury</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://584b0aa350b92.streamlock.net:1935/folk-tv/myStream.sdp/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Folk TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://584b0aa350b92.streamlock.net:1935/folk-tv/myStream.sdp/playlist.m3u8" href="javascript:void(0);">Folk TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-food52/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">Food52</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stitcher.pluto.tv/stitch/hls/channel/5bb1af6a268cae539bcedb0a/master.m3u8?sid=web24157571521&deviceType=web&deviceMake=web&deviceVersion=1&deviceId=web24163643069&appVersion=5.2.7&deviceDNT=web&deviceModel=web" href="javascript:void(0);">Forensic Files</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-koki.cmgvideo.com/koki/2564k/index.m3u8" href="javascript:void(0);">FOX 23 Tulsa OK (KOKI-TV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content.uplynk.com/channel/e56ba52a1b9d45ad8c8a033fd83fe480.m3u8" href="javascript:void(0);">FOX 28 Savannah GA (WTGS)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://fox-foxnewsnow-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">FOX News Now</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fnurtmp-f.akamaihd.net/i/FNRADIO_1@92141/master.m3u8" href="javascript:void(0);">Fox News Radio</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://fox-foxsoul-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">Fox Soul</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://austchannel-live.akamaized.net/hls/live/2002736/austchannel-sport/master.m3u8" href="javascript:void(0);">FOX Sport HD 1 (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://static.france24.com:80/live/F24_AR_HI_HLS/live_tv.m3u8?fluxustv.m3u8" href="javascript:void(0);">France 24 (FR)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://static.france24.com/live/F24_EN_LO_HLS/live_web.m3u8" href="javascript:void(0);">France 24 (FR) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://f24hls-i.akamaihd.net/hls/live/221147/F24_EN_HI_HLS/master.m3u8" href="javascript:void(0);">France 24 (FR) (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bit.ly/2xV7ewi" href="javascript:void(0);">Free Speech TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://edge.free-speech-tv-live.top.comcast.net/out/u/fstv.m3u8" href="javascript:void(0);">Free Speech TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stitcher.pluto.tv/stitch/hls/channel/5938888cd045ffce74cf9048/master.m3u8?deviceType=web&deviceMake=Chrome&deviceModel=Chrome&sid=88958f10-712d-11e8-b9ec-8ba319deeadf&deviceId=889540f0-712d-11e8-b9ec-8ba319deeadf&deviceVersion=37.0.2049.0&appVersion=2.0.0&deviceDNT=0&userId=&advertisingId=&deviceLat=38.5783&deviceLon=-90.6666&app_name=&appName=&appStoreUrl=&serverSideAds=true" href="javascript:void(0);">FrontDoor</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://elevensports-uk.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">FTF For the fans</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-funnybone/index.m3u8" href="javascript:void(0);">Funny Bone TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.swagit.com/live-edge/galvestontx/smil:hd-16x9-1-b/playlist.m3u8" href="javascript:void(0);">Galveston County TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://57d6b85685bb8.streamlock.net:1935/abrgemporiaukgfx/livestream_360p/index.m3u8" href="javascript:void(0);">Gemporia (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/teleyupp/teleup-gettv/playlist.m3u8" href="javascript:void(0);">GetTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.swagit.com/live-edge/glendaleaz/smil:std-4x3-1-a/chunklist.m3u8" href="javascript:void(0);">Glendale 11</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.corusdigitaldev.com/groupa/live/48a5882b-a1ec-42d7-bfd7-6c2739e737da/live.isml/master.m3u8" href="javascript:void(0);">Global British Columbia (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dfmjr9irb1dl5.cloudfront.net/out/v1/454010ff309e4963a087f5802856e346/index.m3u8" href="javascript:void(0);">Global Calgary (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://da7sdtkzly6qj.cloudfront.net/out/v1/b317f6c10f2e493993bd2b5314df1c7c/index.m3u8" href="javascript:void(0);">Global Edmonton (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.corusdigitaldev.com/groupd/live/8970c668-40cd-4ca9-8c4d-25fd04f619b5/live.isml/master.m3u8" href="javascript:void(0);">Global Toronto (720p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live-h1.frontlayer.net/fl592468/live/chunks.m3u8" href="javascript:void(0);">Globesville (New York Institute of Technology)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://brandusa-gousa-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Go USA - github.com/Free-IPTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://zypelive-lh.akamaihd.net/i/default_1@710958/master.m3u8" href="javascript:void(0);">GOD TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/going_to_war/playlist.m3u8" href="javascript:void(0);">Going To War</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-goldentv/index.m3u8" href="javascript:void(0);">Golden TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bstna.tulix.tv/live/bs_2m/index.m3u8" href="javascript:void(0);">Gospel Truth TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus4-a.akamaihd.net/greensboro/G0197_003/chunklist.m3u8" href="javascript:void(0);">Greensboro TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/teleyupp/teleup-grit/playlist.m3u8" href="javascript:void(0);">Grit</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live2/gsn_720p/chunks.m3u8" href="javascript:void(0);">GSN (Game Show Network)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gustotv.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Gusto TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/ebf95254ca/+0000/low/c.m3u8" href="javascript:void(0);">Gusto TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gustotv-samsung-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">GustoTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://moviesphere-roku.amagi.tv/hls/amagi_hls_data_yupptvfrn-hallmark-frndlytv/CDN/playlist.m3u8" href="javascript:void(0);">Hallmark Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://moviesphere-roku.amagi.tv/hls/amagi_hls_data_yupptvfrn-hallmark-drama-frndlytv/CDN/playlist.m3u8" href="javascript:void(0);">Hallmark Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=redbox&deviceid=&is_lat=&subp=RedboxdesktopWebLinux/amagi_hls_data_xumo1212A-rokuhallmark/CDN/playlist.m3u8" href="javascript:void(0);">Hallmark Movies & More</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://moviesphere-roku.amagi.tv/hls/amagi_hls_data_yupptvfrn-hallmarkmovies-frndlytv/CDN/playlist.m3u8" href="javascript:void(0);">Hallmark Movies & Mysteries</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wvitlive-f.akamaihd.net/i/wvitb2_1@71164/master.m3u8" href="javascript:void(0);">Hartford: WVIT 30 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-HBCU/index.m3u8" href="javascript:void(0);">HBCU Game Day</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bk7l2w4nlx53-hls-live.5centscdn.com/HISTORY/961ac1c875f5884f31bdd177365ef1e3.sdp/playlist.m3u8" href="javascript:void(0);">History Channel (Best of)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://hollywire.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Hollywire</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/d5b48/+0000/low/c.m3u8" href="javascript:void(0);">Honor TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-honortv/index.m3u8" href="javascript:void(0);">Honor TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22705/+0000/hi/c.m3u8" href="javascript:void(0);">Horizon Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/horrified/chunks.m3u8" href="javascript:void(0);">Horrified TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://hncfree-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Horse and Country</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-hotrock/index.m3u8" href="javascript:void(0);">Hot Rock TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:HouseChannel_all/chucklist.m3u8" href="javascript:void(0);">House of Representatives</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alchimie-humanity-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Humanity</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn61.liveonlineservices.com/hls/humraaz.m3u8" href="javascript:void(0);">HUMRAAZ TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://food.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Hungry</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rcavlive.akamaized.net/hls/live/704025/xcanrdi/master_2500.m3u8" href="javascript:void(0);">Ici RDI</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://uni10rtmp.tulix.tv/iipctv/iipctv.smil/chunklist_w1550531622_b864000.m3u8" href="javascript:void(0);">IIPC TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.imamhossaintv.com/live/ih3.m3u8" href="javascript:void(0);">Imam Hussein TV 3 English</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://feeds.intoday.in/hltapps/api/master.m3u8" href="javascript:void(0);">India Today</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wttv-lh.akamaihd.net:80/i/WTTVBreaking_1@333494/master.m3u8" href="javascript:void(0);">Indianapolis: CBS 4 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://freespeech.akamaized.net/hls/live/2016712/live2/playlist.m3u8" href="javascript:void(0);">Infowars TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://insighttv-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Insight</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://inspnetworks-lh.akamaihd.net/i/insp_2@393793/master.m3u8" href="javascript:void(0);">Inspiration TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://inspnetworks-lh.akamaihd.net/i/insp_2@393793/master.m3u8" href="javascript:void(0);">Inspiration TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://introuble-samsung.amagi.tv/playlist.m3u8" href="javascript:void(0);">Introuble</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.30a-tv.com/InvPit.m3u8" href="javascript:void(0);">Investment Pitch</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://www.30a-tv.com/InvPit.m3u8?fluxustv.m3u8" href="javascript:void(0);">Investment Pitch</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://inwild-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Inwild</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://inwonder-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Inwonder</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ion-plus.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Ion Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-iread2know/index.m3u8" href="javascript:void(0);">iRead2Know</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-shetv/index.m3u8" href="javascript:void(0);">iShe TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cpdc101-lh.akamaihd.net/i/ISNCPDCMB1_1@314337/master.m3u8" href="javascript:void(0);">ISN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/its_comming_soon/chunks.m3u8" href="javascript:void(0);">It's At The Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://sportportal1.akamaized.net/hls/live/702646/itvlive/ITV1PORTAL2/master_Main1800.m3u8" href="javascript:void(0);">ITV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wjax.cmgvideo.com/wjax/2564k/index.m3u8?fluxustv.m3u8" href="javascript:void(0);">Jacksonville: WJAX Action News (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni8rtmp.tulix.tv:1935/shalomtv-pc/smil:shalomtv.smil/master.m3u8" href="javascript:void(0);">JBS</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wowzaprod134-i.akamaihd.net/hls/live/577814/ccddaf02/playlist.m3u8" href="javascript:void(0);">Jewelry Television</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3svwuchx5fp62.cloudfront.net/rtplive/smil:jltv.smil/chunklist.m3u8" href="javascript:void(0);">Jewish Life TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,kerrang-desktop.m3u8?yo.up=http://boxtv-origin-elb.cds1.yospace.com/uploads/kerrang/" href="javascript:void(0);">Kerrang</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-1.streamhoster.com/pl_134/amlst:200914-1282960/playlist.m3u8?DVR" href="javascript:void(0);">KET</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-2.streamhoster.com/pl_140/amlst:200914-1298290/playlist.m3u8?DVR" href="javascript:void(0);">KET PBS Kids</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/KTVHD/chunklist_w363623166.m3u8" href="javascript:void(0);">Key TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://studio71-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Kid Gamer TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://kidoodletv-kdtv-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Kidoodle TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://usgeowall.sinclairstoryline.com/channel/1698bf57810a48c486b83d542bca298d.m3u8?tc=1&exp=1614631202&rn=1698140798&ct=c&cid=1698bf57810a48c486b83d542bca298d&repl=aboi&sig=3c0463729cd2ddcb9509c3130849b8737dd917ccbaafaccb832d0ec43cae6db5" href="javascript:void(0);">Kids Click (Geo)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-kiro.cmgvideo.com:80/kiro/1864k/index.m3u8" href="javascript:void(0);">KIRO 7 News (KIRO-TV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,kiss-inapp.m3u8?yo.up=http%3a//boxtv-origin-elb.cds1.yospace.com/uploads/kiss/" href="javascript:void(0);">Kiss</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://kitchennightmares-samsung.amagi.tv/playlist.m3u8" href="javascript:void(0);">Kitchen Nightmares</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://kmtvnow-samsung.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">KMTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/328d1434fb51476cb6567c74d5b2cc70.m3u8" href="javascript:void(0);">KMTV Omaha</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://knstream1.azureedge.net/knlive/knlive_high.m3u8" href="javascript:void(0);">Knowledge Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://w10.streamgb.com:1935/kool/kool/playlist.m3u8" href="javascript:void(0);">Kool London Radio</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://w11.streamgb.com:1935/kool/kool/playlist.m3u8" href="javascript:void(0);">Kool London Radio (Webradio)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bozztv.com/teleyupp/teleup-laff/playlist.m3u8" href="javascript:void(0);">Laff</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://185.105.4.193:1935/ltv/myStream/playlist.m3u8" href="javascript:void(0);">Lagos Television</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus3-a.akamaihd.net/lakehavasucity/G0643_002/chunklist.m3u8" href="javascript:void(0);">Lake Havasu City 4</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/39919d3f7a074eefa8bf579214e952f9.m3u8?ad=live" href="javascript:void(0);">Las Vegas: 13 Action News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://5a0e89631aa14.streamlock.net/LatestTV/LatestTV/playlist.m3u8" href="javascript:void(0);">Latest TV (4PM TO 2AM)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1234A-lawcrime/CDN/master.m3u8" href="javascript:void(0);">Law & Crime Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://lawandcrime.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Law & Crime Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lawandcrime.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Law and Crime</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://legochannel-roku.amagi.tv/playlist.m3u8" href="javascript:void(0);">Lego Channel TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edu.leominster.tv/Edu/smil:Edu.smil/chunklist_w43731873_b1344100_sleng_t64NzIwcA==.m3u8?fluxustv.m3u8" href="javascript:void(0);">Leominster TV Educational</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edu.leominster.tv/Edu/smil:Edu.smil/chunklist_w43731873_b1344100_sleng_t64NzIwcA==.m3u8" href="javascript:void(0);">Leominster TV Educational</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gov.leominster.tv/Gov/smil:Gov.smil/chunklist_w1957429215_b1344100_sleng_t64NzIwcA==.m3u8?fluxustv.m3u8" href="javascript:void(0);">Leominster TV Government</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gov.leominster.tv/Gov/smil:Gov.smil/chunklist_w1957429215_b1344100_sleng_t64NzIwcA==.m3u8" href="javascript:void(0);">Leominster TV Government</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gov.leominster.tv/Pub/smil:Pub.smil/chunklist_w2036537178_b1344100_sleng_t64NzIwcA==.m3u8" href="javascript:void(0);">Leominster TV Public</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gov.leominster.tv/Pub/smil:Pub.smil/chunklist_w2036537178_b1344100_sleng_t64NzIwcA==.m3u8?fluxustv.m3u8" href="javascript:void(0);">Leominster TV Public</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/letsbuildtv/playlist.m3u8" href="javascript:void(0);">Let's Build</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus2-a.akamaihd.net/lfucg/G0264_002/chunklist_w831870727.m3u8" href="javascript:void(0);">Lex TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus2-a.akamaihd.net/lfucg/G0264_002/chunklist_w831870727.m3u8?fluxustv.m3u8" href="javascript:void(0);">Lex TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni5rtmp.tulix.tv/lifevision/lifevision.stream/playlist.m3u8" href="javascript:void(0);">LifevisionTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lindenwood-lh.akamaihd.net/i/lindenwood_1@728008/master.m3u8" href="javascript:void(0);">Lindenwood University TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stitcher.pluto.tv/stitch/hls/channel/5873fc21cad696fb37aa9054/master.m3u8?sid=web24157571521&deviceType=web&deviceMake=web&deviceVersion=1&deviceId=web24163643069&appVersion=5.2.7&deviceDNT=web&deviceModel=web" href="javascript:void(0);">Live Music Replay</a>
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
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/TxSbNMu4R5anKrjV02VOBg/master.m3u8?iu=/4128/CBS.LA.OTT" href="javascript:void(0);">Los Angeles: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d27r4t30huw0iy.cloudfront.net/playlist.m3u8" href="javascript:void(0);">Love Nature 4K</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://loveworldusa-lh.akamaihd.net/i/lwusa2_1@514985/master.m3u8" href="javascript:void(0);">LoveWorld USA</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d1gsmhzkyjhxg4.cloudfront.net/playlist.m3u8" href="javascript:void(0);">Lucky Dog</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alchimie-luxe-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Luxe TV - github.com/Free-IPTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-mwg/index.m3u8" href="javascript:void(0);">Mad Dog & Merrill Midwest Grill’n</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ad-playlistserver.aws.syncbak.com/playlist/899088/master.m3u8?access_token=eyJhbGciOiJIUzI1NiIsImtpZCI6IkdyYXkyMDE2MDgyOSIsInN1YiI6IioiLCJ0eXAiOiJKV1QifQ.eyJleHAiOjE3OTAzNjkxMDUsImlzcyI6IldMUyIsIm1kNSI6ImJhZTU4Y2ZlZWM2NmU1MjZkNmVjZmE1YmUzNTQxMzQ4IiwibWlkIjoiODk5MDg4In0.vBWkHmqS3z3dpq8UWfbk4wFd-vQlj6B0up-rpt7X_7Q" href="javascript:void(0);">Madison: NBC 15 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://magellantv-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Magellan TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,magic-desktop.m3u8?yo.up=http://boxtv-origin-elb.cds1.yospace.com/uploads/magic/" href="javascript:void(0);">Magic</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2rwmwucnr0d10.cloudfront.net/live_750.m3u8" href="javascript:void(0);">Manoto</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://endemol-mastersoffood-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Masters of Food</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mavtv-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Mav TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mavtv-mavtvglobal-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Mav TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect-live-mcm11.cablecast.tv/live/CELL-296k-234p/CELL-296k-234p.m3u8" href="javascript:void(0);">MCM-TV McMinnville</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wowzaprod133-i.akamaihd.net/hls/live/577385/a1e0ad3f/playlist.m3u8" href="javascript:void(0);">Mello TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/metalocalypse/stream.m3u8" href="javascript:void(0);">Metalocalypse</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cbsn-min-cedexis.cbsnstream.cbsnews.com/out/v1/76518f06941246ba810c8d175600bf74/master_6.m3u8" href="javascript:void(0);">Minnesota: CBS News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/80f6ba72c8/+0000/high/c.m3u8" href="javascript:void(0);">MMA Junkie (Distro TV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alchimie-mmatv-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">MMA TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/molaughter/chunks.m3u8" href="javascript:void(0);">Mo Laughter</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/molaughtertv/molaughtertv/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Mo Laughter TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/molaughtertv/molaughtertv/playlist.m3u8" href="javascript:void(0);">Mo Laughter TV - github.com/Free-IPTV</a>
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
               <a class="channel nav-link" data-value="http://94.130.180.175:8081/live/greektv/playlist.m3u8" href="javascript:void(0);">Montreal Greek TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2-xumo.fubo.tv/amagi_hls_data_xumo1212A-motorvisiontv/CDN/master.m3u8" href="javascript:void(0);">Motorvision TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/movee4u/chunks.m3u8" href="javascript:void(0);">Movee 4U</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/e9b4093a41/+0000/high/c.m3u8" href="javascript:void(0);">Movie Kingdom</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://moviemix.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">MovieMix</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alchimie-movies-central-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Movies Central</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://moviesphere-samsung-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">Moviesphere Free</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/mr-pickles/stream.m3u8" href="javascript:void(0);">Mr. Pickles</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtaorigin_delivery@353498/master.m3u8" href="javascript:void(0);">MTA 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cflive-emea.live-delivery.ooyala.com/out/u/3vkkbgnvsm2r5/101593/1lanVtaDE6sCK6v0vDomDayqoKeSal6G/cn/8fb839e3a82045bd99a92ecd9df257e5.m3u8" href="javascript:void(0);">MTA 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ooyalahd2-f.akamaihd.net:80/i/mtaorigin_delivery@353498/index_1100_av-p.m3u8" href="javascript:void(0);">MTA 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtaeng_delivery@345736/index_3000_av-p.m3u8" href="javascript:void(0);">MTA 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtach7audio_delivery@65519/master.m3u8" href="javascript:void(0);">MTA 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtach7audio_delivery@65519/index_2400_av-p.m3u8?sd=10&rebase=on" href="javascript:void(0);">MTA 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtageraudio_delivery@308889/index_1100_av-p.m3u8?sd=10&rebase=on" href="javascript:void(0);">MTA 2 Urdu</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtach7_delivery@348438/master.m3u8" href="javascript:void(0);">MTA 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtaengaudio_delivery@138280/index_3000_av-p.m3u8" href="javascript:void(0);">MTA Africa</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ooyalahd2-f.akamaihd.net/i/mtaengaudio_delivery@138280/master.m3u8" href="javascript:void(0);">MTA Africa</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://unilivemtveu-lh.akamaihd.net/i/mtvno_1@346424/index_3500_av-b.m3u8" href="javascript:void(0);">MTV Norge</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-mvptv/index.m3u8" href="javascript:void(0);">MVP TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mytime-tcl.amagi.tv/playlist.m3u8" href="javascript:void(0);">My time Movies Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5ddf901280e3550009139c86/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel" href="javascript:void(0);">My5 Documentaries</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5d2c57ee4f9ddf73da8a0ba5/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel" href="javascript:void(0);">My5 GP's</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/holyfield/chunks.m3u8" href="javascript:void(0);">MyHolyfield TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-mythos/index.m3u8" href="javascript:void(0);">Mythos</a>
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
               <a class="channel nav-link" data-value="https://uplynkcontent.sinclairstoryline.com/channel/ddd76fdc1c0a456ba537e4f48e827d3e.m3u8" href="javascript:void(0);">NASA TV Media</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://iphone-streaming.ustream.tv/uhls/10414700/streams/live/iphone/playlist.m3u8" href="javascript:void(0);">NASA TV Media</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.ec.nau.edu/live/amlst:channelfour/chunklist_w842042479_b628000.m3u8" href="javascript:void(0);">Naz Today</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/1fbfb28ae5044f619f75ae0adb011989.m3u8" href="javascript:void(0);">NBC 26 (WGBA)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stitcher.pluto.tv/stitch/hls/channel/5268abcd0ce20a8472000114/master.m3u8?sid=web24157571521&deviceType=web&deviceMake=web&deviceVersion=1&deviceId=web24163643069&appVersion=5.2.7&deviceDNT=web&deviceModel=web" href="javascript:void(0);">NBC News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=redbox&deviceid=&is_lat=&subp=RedboxdesktopWebLinux/amagi_hls_data_xumo1212A-xumo-nbcnewsnow/CDN/playlist.m3u8" href="javascript:void(0);">NBC News Now</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://kntvlive-f.akamaihd.net/i/kntvb1_1@15530/master.m3u8" href="javascript:void(0);">NBC San Jose CA (KNTV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://kntvlive-f.akamaihd.net/i/kntvb2_1@15530/master.m3u8" href="javascript:void(0);">NBC San Jose CA (KNTV)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lxlive-lh.akamaihd.net/i/LX_LIVE@148206/master.m3u8" href="javascript:void(0);">NBCLX</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ndtv24x7elemarchana.akamaized.net/hls/live/2003678/ndtv24x7/ndtv24x7master.m3u8" href="javascript:void(0);">NDTV 24x7</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://newidco-newkid-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">New Kid TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://media4.tripsmarter.com:1935/LiveTV/NOTVHD/playlist.m3u8" href="javascript:void(0);">New Orleans TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bit.ly/2N6lxn9" href="javascript:void(0);">New Orleans TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nmxlive.akamaized.net/hls/live/529965/Live_1/index_1080.m3u8" href="javascript:void(0);">Newsmax</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nmxlive.akamaized.net/hls/live/529965/Live_1/index_288.m3u8" href="javascript:void(0);">Newsmax TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nmxlive.akamaized.net/hls/live/529965/Live_1/index_720.m3u8" href="javascript:void(0);">Newsmax TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nmxlive.akamaized.net/hls/live/529965/Live_1/index.m3u8" href="javascript:void(0);">Newsmax TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nmxlive.akamaized.net/hls/live/529965/Live_1/index.m3u8" href="javascript:void(0);">Newsmax TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://broadcastny.yournewsnet.com:8081/master/newsnetweb/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">NewsNet</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://broadcastny.yournewsnet.com:8081/master/newsnetweb/playlist.m3u8" href="javascript:void(0);">NewsNet</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://fox-foxnewsnow-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">NewsNow from FOX</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/3b8643bb739f4f24a8248fad52beb2a0.m3u8?repl=aboi" href="javascript:void(0);">NewsNow from FOX (alt)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/4bb4901b934c4e029fd4c1abfc766c37.m3u8" href="javascript:void(0);">Newsy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://content.uplynk.com/channel/4bb4901b934c4e029fd4c1abfc766c37.m3u8?ad=newsyweb" href="javascript:void(0);">Newsy</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ls1.serverdump.com/stream3.m3u8" href="javascript:void(0);">Noor TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://highvolume04.streampartner.nl:1935/nos_pais_24_7/smil:livestream.stream.smil/chunklist_w1798703532_b2000000.m3u8" href="javascript:void(0);">Nos Païs</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/NothingScripted.m3u8" href="javascript:void(0);">Nothing Scripted</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/NothingScripted.m3u8?fluxustv.m3u8" href="javascript:void(0);">Nothing Scripted</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/npowered/playlist.m3u8" href="javascript:void(0);">nPowered TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://uni6rtmp.tulix.tv/nrbnetwork/myStream.sdp/playlist.m3u8" href="javascript:void(0);">NRB TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.ntdimg.com/en01live900/playlist.m3u8" href="javascript:void(0);">NTD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-2.streamhoster.com/pl_138/201748-1282640-1/playlist.m3u8" href="javascript:void(0);">NTV Newfoundland</a>
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
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live1/oan_720p/chunks.m3u8" href="javascript:void(0);">One America News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/myoktv/chunks.m3u8" href="javascript:void(0);">Opportunity Knocks TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://otv3.ocfl.net:1936/OrangeTV/smil:OrangeTV.smil/chunklist_w1007974604_b894100_sleng.m3u8" href="javascript:void(0);">Orange TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://otv3.ocfl.net:1936/OrangeTV/smil:OrangeTV.smil/playlist.m3u8" href="javascript:void(0);">Orange TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://obsession-media-sinclair.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Outdoor America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/3gT64sH/c.m3u8" href="javascript:void(0);">Outside TV (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://outside-tv.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Outside TV+</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.pardesitv.online/pardesi/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Pardesi TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://47.23.7.30:8080/live/WIFI-1096k-360p/WIFI-1096k-360p.m3u8" href="javascript:void(0);">PATV Great Neck</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://iptv.tapesh.tv/tapesh/playlist.m3u8" href="javascript:void(0);">PBC Tapesh TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://pbs-samsunguk.amagi.tv/playlist.m3u8" href="javascript:void(0);">PBS America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://2-fss-2.streamhoster.com/pl_140/amlst:200914-1298290/playlist.m3u8" href="javascript:void(0);">PBS Kids (EST)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://peacetv.api.visionip.tv/live/ASHTTP/peacetv-peacetv-peacetv-english-hsslive-25f-16x9-MB/playlist.m3u8" href="javascript:void(0);">Peace TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://jukin-peopleareawesome-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">People are Awesome</a>
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
               <a class="channel nav-link" data-value="http://svc-lvanvato-cxtv-wpxi.cmgvideo.com/wpxi/2564k/index.m3u8" href="javascript:void(0);">Pittsburgh: WPXI 11 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/pce/chunks.m3u8" href="javascript:void(0);">Planet Cannabis Entertainment</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vod365-planet-knowledge-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Planet Knowledge</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-planetmusic/index.m3u8" href="javascript:void(0);">Planet Music</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://pocketwatch-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Pocket watch</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://95.160.28.218:1935/pogranicze/myStream/chunks.m3u8" href="javascript:void(0);">Pogranicze TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live2/pop_720p/chunks.m3u8" href="javascript:void(0);">Pop</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live-poptv-fastly-prod.global.ssl.fastly.net/pop/master.m3u8" href="javascript:void(0);">Pop (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/wAlxn4cs/c.m3u8" href="javascript:void(0);">POPSTAR! TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://a.jsrdn.com/broadcast/447912f76b/+0000/high/c.m3u8" href="javascript:void(0);">Popular Science TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.presstv.com/liveprs/smil:liveprs.smil/playlist.m3u8" href="javascript:void(0);">Press TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://primeasia.dyndns.tv:8080/Live_web_250/tracks-v1a1/mono.m3u8" href="javascript:void(0);">Prime Asia TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn27.live247stream.com/primecanada/247/primecanada/stream1/chunks.m3u8" href="javascript:void(0);">Prime Canada TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-ptd/index.m3u8" href="javascript:void(0);">Prime Time Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://reflect.live.pgcps.cablecast.tv/live/WIFI-696k-360p/WIFI-696k-360p.m3u8" href="javascript:void(0);">Prince George County Public Schools</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://morningside-lh.akamaihd.net/i/jblive_1@303354/index_2008_av-p.m3u8" href="javascript:void(0);">PTL TV Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stingray-qelloconcerts-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Qello Concerts by Stingray</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ion-qubo-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Qubo</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://qvmstream.tulix.tv/720p/720p/playlist.m3u8" href="javascript:void(0);">Quo Vadis TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lsqvc1uscln-lh.akamaihd.net/i/lsqvc1uscln_01@809410/master.m3u8" href="javascript:void(0);">QVC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_main_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://llnw.live.qvc.simplestream.com/hera/remote/qvcuk_primary_sdi1/live.m3u8" href="javascript:void(0);">QVC +1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live3/qvcplus_720p/chunks.m3u8" href="javascript:void(0);">QVC 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lsqvc2us-lh.akamaihd.net/i/lsqvc2us_01@809440/master.m3u8" href="javascript:void(0);">QVC 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://lsqvc3us-lh.akamaihd.net/i/lsqvc3us_01@809459/master.m3u8" href="javascript:void(0);">QVC 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_beauty_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC Beauty</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_extra_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC Extra</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://n1.klowdtv.net/live2/qvclive_720p/chunks.m3u8" href="javascript:void(0);">QVC Live</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.qvcuk.simplestreamcdn.com/live/qvcuk_style_clean/bitrate1.isml/live.m3u8" href="javascript:void(0);">QVC Style</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://qvmstream.tulix.tv/720p/720p/chunklist_w1600218747.m3u8" href="javascript:void(0);">QVTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://racingvic-i.akamaized.net/hls/live/598695/racingvic/1500.m3u8" href="javascript:void(0);">Racing.com</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://racingvic-i.akamaized.net/hls/live/598695/racingvic/628.m3u8" href="javascript:void(0);">Racing.com</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://racingvic-i.akamaized.net/hls/live/598695/racingvic/628.m3u8?fluxustv.m3u8" href="javascript:void(0);">Racing.com</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ocb-lh.akamaihd.net/i/ocb_mpls_tvmc1@383606/master.m3u8" href="javascript:void(0);">Radio y Televisión Martí</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://realstories-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Real Stories</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_6660.m3u8" href="javascript:void(0);">Red Bull TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://i.mjh.nz/au/Canberra/tv.redbull.tv.m3u8" href="javascript:void(0);">Red Bull TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://i.mjh.nz/au/Melbourne/tv.redbull.tv.m3u8" href="javascript:void(0);">Red Bull TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_928.m3u8" href="javascript:void(0);">Red Bull TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rbmn-live.akamaized.net/hls/live/622817/BoRB-US/master_928.m3u8" href="javascript:void(0);">Red Bull TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master.m3u8" href="javascript:void(0);">Red Bull TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master.m3u8" href="javascript:void(0);">Red Bull TV</a>
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
               <a class="channel nav-link" data-value="https://endemol-reeltruth-2-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Reel Truth</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rtv.cdn.mangomolo.com/rtv/smil:rtv.stream.smil/playlist.m3u8" href="javascript:void(0);">Relevation TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rtv.cdn.mangomolo.com/rtv/smil:switch.smil/playlist.m3u8" href="javascript:void(0);">Revelation TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/rick-and-morty/stream.m3u8" href="javascript:void(0);">Rick and Morty</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rifftrax.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">RiffTrax</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/rightnowtv/playlist.m3u8" href="javascript:void(0);">Right Now TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://feed.rightnowtelevision.com/live/smil:rntv.smil/playlist.m3u8" href="javascript:void(0);">RN TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d2klx6wjx7p5vm.cloudfront.net/Rooster-teeth/ngrp:Rooster-teeth_all/playlist.m3u8" href="javascript:void(0);">Rooster Teeth TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rt-news.secure.footprint.net/1103.m3u8" href="javascript:void(0);">RT</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rt-usa.secure.footprint.net/1105.m3u8?fluxustv.m3u8" href="javascript:void(0);">RT America (RU) (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rt-usa.secure.footprint.net/1105.m3u8" href="javascript:void(0);">RT America US</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rt-uk.secure.footprint.net/1106.m3u8?streamType=live" href="javascript:void(0);">RT UK</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rt-uk.secure.footprint.net/1106.m3u8?fluxustv.m3u8" href="javascript:void(0);">RT UK (RU)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rt-doc.secure.footprint.net/1101.m3u8" href="javascript:void(0);">RT Д English</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://oflash.dfw.swagit.com/live/ryeny/smil:std-4x3-1-a/playlist.m3u8" href="javascript:void(0);">RyeTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://18.191.91.130:1935/live/safetv/playlist.m3u8" href="javascript:void(0);">SafeTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d23gend7a1exlu.cloudfront.net/playlist.m3u8" href="javascript:void(0);">Samsung Wildlife</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://kntvlive-f.akamaihd.net/i/kntvb2_1@15530/index_1286_av-p.m3u8" href="javascript:void(0);">San Francisco: NBC 11 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://158.69.124.9:1935/sardaritv/sardaritv/playlist.m3u8" href="javascript:void(0);">Sardari TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://sonlife5-i.akamaihd.net/hls/live/584631/ch5/ch53/ch53.m3u8" href="javascript:void(0);">SBN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://sonlife7-i.akamaihd.net/hls/live/585011/ch7/master.m3u8" href="javascript:void(0);">SBN</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://sonlife10-i.akamaihd.net/hls/live/585013/ch10/master.m3u8" href="javascript:void(0);">SBN Global</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnleomarkstudios.teleosmedia.com/stream/leomarkstudios/screamfest/seglist_720p.m3u8" href="javascript:void(0);">Screamfest</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcnleomarkstudios.teleosmedia.com/stream/leomarkstudios/screamfest/playlist.m3u8" href="javascript:void(0);">Screamfest</a>
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
               <a class="channel nav-link" data-value="https://gma2.blab.email/sec.m3u8" href="javascript:void(0);">SEC Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-stgn/index.m3u8" href="javascript:void(0);">Sent TV Global Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.sferatv.pl:1935/sferalive/smil:sferalive.smil/chunklist_b1128000_slpl.m3u8" href="javascript:void(0);">Sfera TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tv.sheffieldlive.org/hls/main.m3u8" href="javascript:void(0);">Sheffield Live! 93.2 FM</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://aos01-evine.secure.footprint.net/evine/cleanfeed/VIDEO_0_2064000.m3u8" href="javascript:void(0);">Shop HQ</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://shout-factory.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Shout Factory TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/sidewalks.m3u8" href="javascript:void(0);">Sidewalks</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://93.190.140.42:8081/SilenceTV/live/playlist.m3u8" href="javascript:void(0);">Silence TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skylivetab-i.akamaihd.net/hls/live/569779/tablive/sky1.m3u8" href="javascript:void(0);">Sky 1 Racing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skylivetab-i.akamaihd.net/hls/live/569779/tablive/sky2.m3u8" href="javascript:void(0);">Sky 2 Racing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://skydvn-nowtv-atv-prod.skydvn.com/atv/skynews/1404/live/06.m3u8" href="javascript:void(0);">Sky News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://skydvn-nowtv-atv-prod.skydvn.com/atv/skynews/1404/live/index.m3u8" href="javascript:void(0);">Sky News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.skynewsarabia.com/hls/sna_720.m3u8" href="javascript:void(0);">Sky News (GB)</a>
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
               <a class="channel nav-link" data-value="https://skynewsau-live.akamaized.net/hls/live/2002689/skynewsau-extra1/master.m3u8" href="javascript:void(0);">Sky News Extra</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skynewsau-live.akamaized.net/hls/live/2002690/skynewsau-extra2/master.m3u8" href="javascript:void(0);">Sky News Extra 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://skynewsau-live.akamaized.net/hls/live/2002691/skynewsau-extra3/master.m3u8" href="javascript:void(0);">Sky News Extra 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://t01587-lh.akamaihd.net/i/t01587SmartLifeStyle_1@692079/index_1200_av-p.m3u8?sd=10&set-akamai-hls-revision=5&rebase=on" href="javascript:void(0);">Smart Lifestyle TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://sofytv-samsunguk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Sofy TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://sonlife7-i.akamaihd.net/hls/live/585011/ch7/master.m3u8" href="javascript:void(0);">Sonlife UK</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://147.174.13.196/live/WIFI-1296k-540p/WIFI-1296k-540p.m3u8" href="javascript:void(0);">Southeastern Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://pe-ak-lp01a-9c9media.akamaized.net/live/Space/p/hls/00000201/689924a518f2c776/index/2176f3ac/live/stream/h264/v1/3500000/manifest.m3u8" href="javascript:void(0);">Space (No Audio)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://sparktv-samsunguk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Spark Tv</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vod365-sports-channel-network-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Sports Channel Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playout4multirtmp.tulix.tv/live6/Stream1/playlist.m3u8" href="javascript:void(0);">Sports Grid - github.com/Free-IPTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://sports.ashttp9.visionip.tv/live/visiontvuk-sports-sportstonightlive-hsslive-25f-4x3-SD/chunklist.m3u8" href="javascript:void(0);">Sports Tonight</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/9FKrAqCfRvGfn3tPbVFO-g/master.m3u8" href="javascript:void(0);">Sports TV Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22697/+0000/hi/c.m3u8" href="javascript:void(0);">Sportskool</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://rakuten-spotlight-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Spotlight</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://securecontributions.sechls01.visionip.tv/live/securecontributions-securecontributions-spotlighttv-hsslive-25f-SD/chunklist.m3u8" href="javascript:void(0);">Spotlight TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nimble.dashstreams.net/onestudio/spydar/chunks.m3u8" href="javascript:void(0);">Spydar TV (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stadiumlivein-i.akamaihd.net/hls/live/522512/mux_4/master.m3u8" href="javascript:void(0);">Stadium</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stadium.sinclair.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Stadium</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://endemol-sterlingdrama-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Sterling Drama</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stingray-karaoke-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Stingray Karaoke</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stingray-naturescape-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Stingray Naturescape</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59d39900ebfb8.streamlock.net/streetmusic/streetmusic/playlist.m3u8" href="javascript:void(0);">Street Music 4U (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/d5b46/+0000/c.m3u8" href="javascript:void(0);">Studio C</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vcndstv.teleosmedia.com/stream/dstv/sunburn/seglist_720p.m3u8" href="javascript:void(0);">Sunburn TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://kedoo-supertoonstv-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Supertoons TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.swamiji.tv/YogaIPTV/smil:YogaStream.smil/playlist.m3u8" href="javascript:void(0);">Swamiji TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.swamiji.tv/YogaIPTV/smil:YogaStream.smil/chunklist_w1606422831_b400000.m3u8" href="javascript:void(0);">Swamiji TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdn30.liveonlineservices.com/hls/tagtv.m3u8" href="javascript:void(0);">TAG TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.tamilvision.tv:8081/TVI/SD/chunks.m3u8" href="javascript:void(0);">Tamil Vision TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.tamilvision.tv:8081/TVI/HD/playlist.m3u8" href="javascript:void(0);">Tamil Vision TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tastemade-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Tastemade</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tastemadessai.akamaized.net/amagi_hls_data_tastemade-tastemade/CDN/playlist.m3u8" href="javascript:void(0);">Tastemade</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content.uplynk.com/channel/1831163f97674328ad9f4b4814ed39c5.m3u8" href="javascript:void(0);">TBD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content.uplynk.com/channel/1831163f97674328ad9f4b4814ed39c5.m3u8?tc=1&exp=1614631202&rn=614441536&ct=c&cid=1831163f97674328ad9f4b4814ed39c5&ad=comet&ad.adUnit=%2FTBD%2FLivestream_midroll&ad._debug=TBDNET_ssai_livestream_midroll&ad.ad_rule=1&ad.pmad=12&ad.output=xml_vmap1&sig=5d194a4e4c5a4d59023d6a39a2ba5ba82dcd817b615e9f82115c41d9b26ffd0a" href="javascript:void(0);">TBD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcoveliveios-i.akamaihd.net/hls/live/206632/1997976452001/FamilyHLS/playlist.m3u8" href="javascript:void(0);">TCT Kids</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcsecurelivehls-i.akamaihd.net/hls/live/551061/618566855001/master.m3u8" href="javascript:void(0);">Tele V</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://xapp510394368c1000199.f.l.z.lb.core-cdn.net/10096xtelebase/ios_500/master.m3u8" href="javascript:void(0);">Telebasel HD</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://api.streann.com:8080/loadbalancer-dev/services/public/channels/56992db2e4b045bf250ba13c/playlist.m3u8" href="javascript:void(0);">TeleCuraçao</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d7g1ebft2592.cloudfront.net/mblivev3/hd/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">TeleSUR (VE)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dhx-teletubbies-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Teletubbies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://granicusliveus1-a.akamaihd.net/tempe/G0355_003/chunklist.m3u8" href="javascript:void(0);">Tempe 11</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://streaming.temple.edu/tutvlive/_definst_/mp4:8BRYCQMB/chunklist_w1944862924.m3u8" href="javascript:void(0);">Temple TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playoutengine.sinclairstoryline.com/playout/9f87522c-5a0e-4ff4-b82c-d5564216132f/g.m3u8" href="javascript:void(0);">Tennis Channel (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playoutengine.sinclairstoryline.com/playout/f2f8b269-dd85-4434-bdd3-b3a64ca9cd60/g.m3u8" href="javascript:void(0);">Tennis Channel Plus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tstv-stream.m3u8m.utexas.edu/hls/livestream_hi/index.m3u8" href="javascript:void(0);">Texas Student TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tg-junior.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">TG Junior</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.cds1.yospace.com/csm/live/74246610.m3u8" href="javascript:void(0);">TG4</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://asylum-stirr.amagi.tv/playlist.m3u8" href="javascript:void(0);">The Asylum</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1212A-theasylum/CDN/1280x720_2500000/index.m3u8" href="javascript:void(0);">The Asylum</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://30a-tv.com/beachy.m3u8?fluxustv.m3u8" href="javascript:void(0);">The Beach Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://vitor-theboatshow-1-eu.rakuten.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">The Boat Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22706/+0000/hi/c.m3u8" href="javascript:void(0);">The Boat Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://csm-e.tm.yospace.com/csm/extlive/boxplus01,thebox-desktop.m3u8?yo.up=http://boxtv-origin-elb.cds1.yospace.com/uploads/thebox/" href="javascript:void(0);">The Box</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://thedesignnetwork-tdn-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">The Design Network TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/eric-andre/stream.m3u8" href="javascript:void(0);">The Eric Andre Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://distro.akamaized.net/indexfd_1280x720.m3u8" href="javascript:void(0);">The Film Detective</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wowzaprod4-i.akamaihd.net/hls/live/254057/6380fec3/playlist.m3u8" href="javascript:void(0);">The Florida Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://162.244.81.145:2215/live/livestream/playlist.m3u8" href="javascript:void(0);">The Islamic Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://link.frontlayer.com/services/hls2/fl619843/index.m3u8" href="javascript:void(0);">The Now Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge1.tikilive.com:1935/unrestricted_tikilive/25947/amlst:NWKlw6jwyXpz/chunklist_w981409619_b1105254.m3u8" href="javascript:void(0);">The Outdoor Cooking Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge1.tikilive.com:1935/unrestricted_tikilive/25947/amlst:NWKlw6jwyXpz/chunklist_w981409619_b1105254.m3u8?fluxustv.m3u8" href="javascript:void(0);">The Outdoor Cooking Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/amagi_hls_data_xumo1212A-petcollective/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">The Pet Collective</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tscstreaming-lh.akamaihd.net/i/TSCLiveStreaming_1@91031/master.m3u8" href="javascript:void(0);">The Shopping Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tscstreaming-lh.akamaihd.net/i/TSCLiveStreaming_1@91031/master.m3u8" href="javascript:void(0);">The Shopping Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://playoutengine.sinclairstoryline.com/playout/9f87522c-5a0e-4ff4-b82c-d5564216132f.m3u8" href="javascript:void(0);">The Tennis Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22719/+0000/hi/c.m3u8" href="javascript:void(0);">The Titanic Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wsjlivehls-lh.akamaihd.net/i/events1_1@174990/master.m3u8" href="javascript:void(0);">The Wall Street Journal</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d155hi8td9k2ns.cloudfront.net/out/wapo-medialive3-rtmp/live.m3u8?player=powa" href="javascript:void(0);">The Wall Street Journal Live</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://weather-lh.akamaihd.net/i/twc_1@92006/index_1200_av-p.m3u8?sd=10&rebase=on" href="javascript:void(0);">The Weather Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://thisoldhouse.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">This Old House</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdn.igocast.com/channel11_hls/channel11_master.m3u8" href="javascript:void(0);">This TV Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://mediaworks-i.akamaihd.net/hls/live/220435/3812193411001/3news_live/master.m3u8" href="javascript:void(0);">Three</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/tim-and-eric/stream.m3u8" href="javascript:void(0);">Tim and Eric</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://timeline-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Time Line</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://aenetworks-tinyhousenation-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Tiny House Nation</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://cdn-shop-lc-01.akamaized.net/Content/HLS_HLS/Live/channel(TJCOTT)" href="javascript:void(0);">TJC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=roku/amagi_hls_data_xumo1234A-tmz/CDN/1280x720_5000000/index.m3u8" href="javascript:void(0);">TMZ</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai2.xumo.com/xumocdn/p=redbox&deviceid=&is_lat=&subp=RedboxdesktopWebLinux/amagi_hls_data_xumo1234A-tmz/CDN/playlist.m3u8" href="javascript:void(0);">TMZ</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://toon-goggles.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Toon Goggles</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://toongoggles-toongoggles-3-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Toongoggles</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://toronto3.live247stream.com/toronto360/tv/playlist.m3u8" href="javascript:void(0);">Toronto 360 TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://granicusliveus2-a.akamaihd.net/vienna-va/G1359_003/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Town of Vienna Community Network (Opt-2)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://travelxp-travelxp-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Travel XP</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://rtmp1.abnsat.com/hls/trinity.m3u8" href="javascript:void(0);">Trinity Channel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://barcroft-truly-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Truly</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://95.160.28.218:1935/elblag/myStream_aac/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Truso TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dcunilive262-lh.akamaihd.net/i/dclive_1@303126/index_150_av-p.m3u8?sd=10&rebase=on" href="javascript:void(0);">TULALIP TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://5cc309e93b721.streamlock.net/8402/8402/chunklist_w752648583.m3u8" href="javascript:void(0);">TV Carib</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://edge1.tvdirect13.com/live/smil:mystream.smil/playlist_720p.m3u8" href="javascript:void(0);">TV Direct 13</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.tvkujawy.pl:8080/live/broadcast.m3u8" href="javascript:void(0);">TV Kujawy (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://217.173.176.107:1935/live/ngrp:tvk.stream_all/master.m3u8" href="javascript:void(0);">TV Torun</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://trwamtv.live.e55-po.insyscd.net/trwamtv.smil/playlist.m3u8" href="javascript:void(0);">TV Trwam</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvpinfo" href="javascript:void(0);">TVP3 Info</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvpkatowice" href="javascript:void(0);">TVP3 Katowice</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvpkielce" href="javascript:void(0);">TVP3 Kielce</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvpkrakow" href="javascript:void(0);">TVP3 Krakow</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvplodz" href="javascript:void(0);">TVP3 Lodz</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvplublin" href="javascript:void(0);">TVP3 Lublin</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvpolsztyn" href="javascript:void(0);">TVP3 Olsztyn</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://hbbtvlive.v3.tvp.pl/hbbtvlive/livestream.php?app_id=tvpopole" href="javascript:void(0);">TVP3 Opole</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsboxing/index.m3u8" href="javascript:void(0);">TVS Boxing</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvsclassicmovies/index.m3u8" href="javascript:void(0);">TVS Classic Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsclassicmovies/index.m3u8" href="javascript:void(0);">TVS Classic Movies (480p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvs/index.m3u8" href="javascript:void(0);">TVS Classic Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvscomedy/index.m3u8" href="javascript:void(0);">TVS Comedy Network (480p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsdriveinmovie/index.m3u8" href="javascript:void(0);">TVS Drive In Movie (360p)</a>
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
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvsNostalgiaMovies/index.m3u8" href="javascript:void(0);">TVS Nostalgia Movies (480p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvssports/index.m3u8" href="javascript:void(0);">TVS Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvstallyho/index.m3u8" href="javascript:void(0);">TVS Tally Ho (360p)</a>
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
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvswesternmovies/index.m3u8" href="javascript:void(0);">TVS Western Movie (360p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nrpus.bozztv.com/36bay2/gusa-tvswesternmovies/index.m3u8" href="javascript:void(0);">TVS Western Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nrpus.bozztv.com/36bay2/gusa-tvswsn/index.m3u8" href="javascript:void(0);">TVS Women Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://i.mjh.nz/nz/tv.45.m3u8" href="javascript:void(0);">TVSN Shopping</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tvsn-i.akamaihd.net/hls/live/261837/tvsn_nz/tvsn_nz_750.m3u8" href="javascript:void(0);">TVSN Shopping</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://gargoyle.tomkow.pl/hls/tvt.m3u8" href="javascript:void(0);">TVT Zgorzelec</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:TVWAIR_all/chucklist.m3u8" href="javascript:void(0);">TVW</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:TVWAIR_all/playlist.m3u8" href="javascript:void(0);">TVW</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://d3ktuc8v2sjk6m.cloudfront.net/livetv/ngrp:TVW2_all/master.m3u8" href="javascript:void(0);">TVW-2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://iphone-streaming.ustream.tv/uhls/1524/streams/live/iphone/playlist.m3u8" href="javascript:void(0);">TWiT</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tyt-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">TYT - github.com/Free-IPTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://na-all23.secdn.net/pegstream3-live/play/65ea794b-dd82-41ce-8e98-a9177289a063/master.m3u8" href="javascript:void(0);">UALR TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcliveunivsecure-lh.akamaihd.net/i/un150_A1_1@575439/master.m3u8" href="javascript:void(0);">UN Web TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcliveunivsecure-lh.akamaihd.net/i/un150_A1_1@575439/index_1328_av-b.m3u8" href="javascript:void(0);">UN Web TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://bcliveunivsecure-lh.akamaihd.net/i/un150_A1_1@575439/index_1328_av-b.m3u8?fluxustv.m3u8" href="javascript:void(0);">UN Web TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://alchimie-unbeaten-1-gb.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Unbeaten</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://68.235.37.11:1935/uncion24/Uncion24/playlist.m3u8" href="javascript:void(0);">Uncion 24</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://studio1091-plex.amagi.tv/playlist.m3u8" href="javascript:void(0);">Unindentified</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://de1se01.v2beat.live/playlist.m3u8" href="javascript:void(0);">V2BEAT TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://abr.de1se01.v2beat.live/playlist.m3u8" href="javascript:void(0);">V2Beat TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://de1se01.v2beat.live/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">V2BEAT TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://venntv-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">Venn TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22690/-0500/c.m3u8" href="javascript:void(0);">Venus TV (US Eastern)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22690/-0800/c.m3u8" href="javascript:void(0);">Venus TV (US Pacific)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://184.173.179.163:1935/victorytelevisionnetwork/victorytelevisionnetwork/playlist.m3u8" href="javascript:void(0);">Victory Television Network</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://ss6.domint.net:1946/vct_str/vctv/playlist.m3u8" href="javascript:void(0);">Viva Cristo TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://voa-lh.akamaihd.net/i/voa_mpls_tvmc6@320298/master.m3u8" href="javascript:void(0);">VoA TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://voa-lh.akamaihd.net/i/voapnn_7@72817/master.m3u8" href="javascript:void(0);">VoA TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://voa-lh.akamaihd.net/i/voa_mpls_tvmc6@320298/master.m3u8" href="javascript:void(0);">Voice of America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://voa-lh.akamaihd.net/i/voa_mpls_tvmc3_3@320295/master.m3u8" href="javascript:void(0);">Voice of America (EST)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://voa-lh.akamaihd.net/i/voa_mpls_tvmc6@320298/master.m3u8?fluxustv.m3u8" href="javascript:void(0);">Voice of America (PST)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ad-playlistserver.aws.syncbak.com/playlist/13613390/master.m3u8?access_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IkdyYXkyMDE2MDgyOSJ9.eyJtaWQiOjEzNjEzMzkwLCJtZDUiOiI2Y2M5MzczYjIxZWIwNzQ4ZDA0YTRlYzYyMjU2YjBhMiIsImlhdCI6MTQ5NzM4MTU5NywiaXNzIjoiU3luY2JhayIsInN1YiI6IkdyYXkifQ.qJPiMCbnGjAn9wgPrGjVl3M9Xfc4CVSyoZTZ5OH-1jo" href="javascript:void(0);">WABI 5 - Bangor - Maine</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wusa-lh.akamaihd.net/i/WUSA_Breaking_1@98930/master.m3u8" href="javascript:void(0);">Washington DC: CBS 9 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wrclive-f.akamaihd.net/i/wrcb1_1@46880/master.m3u8" href="javascript:void(0);">Washington DC: NBC 4 News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wrclive-f.akamaihd.net/i/wrcb2_1@46880/master.m3u8" href="javascript:void(0);">Washington DC: Telemundo 44</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://content-ausw2.uplynk.com/channel/ce3b524c342247549e996e7d3a977157.m3u8" href="javascript:void(0);">Watch It Kid</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://waypointtv.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Waypoint Outdoors</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://worcester.vod.castus.tv/live/ch1.m3u8?fluxustv.m3u8" href="javascript:void(0);">WCCA TV Worcester (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://weathernationtv.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Weather Nation</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://jukin-weatherspy-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Weatherspy TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://whistle-1.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Whistle TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.swagit.com/live-edge/whiteplainsny/smil:std-4x3-1-b/chunklist_w1456643228_b512000.m3u8" href="javascript:void(0);">White Plains Community Media</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://162.244.81.156:1935/whprtv33roku/whprtv33roku/playlist.m3u8" href="javascript:void(0);">WHPR</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/williams-stream/stream_html5.m3u8" href="javascript:void(0);">Williams Stream</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://wonder-samsung-uk.amagi.tv/playlist.m3u8" href="javascript:void(0);">Wonder</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://a.jsrdn.com/broadcast/22723/+0000/hi/c.m3u8" href="javascript:void(0);">World of Free Sports</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://dai.google.com/linear/hls/event/V7AWGB66R3avQhuIFaxmjw/master.m3u8" href="javascript:void(0);">World Poker Tour (1080p)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn.elsalvadordigital.com:1935/wowtv/wowtv/chunklist_w84588335.m3u8" href="javascript:void(0);">WOW! TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn.elsalvadordigital.com:1935/wowtv/wowtv/playlist.m3u8?JoCaRoIPTV.m3u8" href="javascript:void(0);">WOW! TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn.elsalvadordigital.com:1935/wowtv/wowtv/playlist.m3u8" href="javascript:void(0);">WOW! TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn.elsalvadordigital.com:1935/wowtv/wowtv/chunklist_w454258933.m3u8" href="javascript:void(0);">WOW! TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wsjlivehls-lh.akamaihd.net/i/events1_1@174990/master.m3u8" href="javascript:void(0);">WSJ Live (VOD)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://xlpore-samsungus.amagi.tv/playlist.m3u8" href="javascript:void(0);">Xplore</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://hls.yourtime.live/hls/stream.m3u8" href="javascript:void(0);">YourTime TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://gideommd.mmdlive.lldns.net/gideommd/d5b6a753f86e4e51b8e15c7d23887a4f/chunklist_b1128000.m3u8" href="javascript:void(0);">Youtoo America</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://yuyu-samsung.samsung.wurl.com/manifest/playlist.m3u8" href="javascript:void(0);">Yuyu</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://y5w8j4a9.ssl.hwcdn.net/zlivingusa_r/index.m3u8" href="javascript:void(0);">Z Living (Opt-1)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://y5w8j4a9.ssl.hwcdn.net/zlivingusa_r_prod/tracks-v1a1/index.m3u8" href="javascript:void(0);">Z Living (Opt-2)</a>
            </li>		
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://593fcf545b0c5.streamlock.net/liveTrans/ngrp:livestream_all/playlist.m3u8" href="javascript:void(0);">ZIZ TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.srg-ssr.ch/m/rsc_de/mp3_128" href="javascript:void(0);">~ 24/7 PLUTO TV ~</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.srg-ssr.ch/m/rsc_de/mp3_128" href="javascript:void(0);">~ 24/7 PLUTO TV ~</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.srg-ssr.ch/m/rsc_de/mp3_128" href="javascript:void(0);">~ 24/7 PLUTO TV ~</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.srg-ssr.ch/m/rsc_de/mp3_128" href="javascript:void(0);">~ 24/7 PLUTO TV ~</a>
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
