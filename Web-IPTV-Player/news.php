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
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/aqua-teen/stream.m3u8" href="javascript:void(0);">Aqua Teen Hunger Force</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/black-jesus/stream.m3u8" href="javascript:void(0);">Black Jesus</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/daily_liveaction_1/stream.m3u8" href="javascript:void(0);">Daily Live Action</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/DREAM-CORP-LLC/stream.m3u8" href="javascript:void(0);">Dream Corp LLC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.youtube.com/watch?v=NvqKZHpKs-g" href="javascript:void(0);">DW News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.youtube.com/watch?v=F-uW_IswLh8" href="javascript:void(0);">Euronews</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.youtube.com/watch?v=6N0lbZr_wXs" href="javascript:void(0);">France 24</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/test-2/stream.m3u8" href="javascript:void(0);">Home Movies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswimtv.warnermediacdn.com/hls/live/2007031/livestream/master_Layer7.m3u8" href="javascript:void(0);">Live Stream</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/metalocalypse/stream.m3u8" href="javascript:void(0);">Metalocalypse</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/mr-pickles/stream.m3u8" href="javascript:void(0);">Mr. Pickles</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/rick-and-morty/stream.m3u8" href="javascript:void(0);">Rick and Morty</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/robot-chicken/stream.m3u8" href="javascript:void(0);">Robot Chicken</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.youtube.com/watch?v=NvCSr7qzAAM" href="javascript:void(0);">RT</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://www.youtube.com/watch?v=9Auq9mYxFEE" href="javascript:void(0);">Sky News</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/squidbillies/stream_7.m3u8" href="javascript:void(0);">Squidbillies</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/superjail/stream.m3u8" href="javascript:void(0);">Superjail!</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/eric-andre/stream.m3u8" href="javascript:void(0);">The Eric Andre Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://adultswim-vodlive.cdn.turner.com/live/venture-bros/stream.m3u8" href="javascript:void(0);">The Venture Bros.</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/tim-and-eric/stream.m3u8" href="javascript:void(0);">Tim and Eric</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://adultswim-vodlive.cdn.turner.com/live/williams-stream/stream_html5.m3u8" href="javascript:void(0);">Williams Stream</a>
            </li>
			<li class="nav-item">
               <a class="channel nav-link" data-value="https://www.youtube.com/watch?v=WisZM9CMlTo" href="javascript:void(0);">Al Jazeera</a>
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
