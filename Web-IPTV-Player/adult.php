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
        <script type="text/javascript" src="dist/playback.js"></script>		
        <script type="text/javascript" src="latest/clappr-chromecast-plugin.min.js"></script>
        <script type="text/javascript" src="dist/level-selector.min.js"></script>
        <script type="text/javascript" src="clappr-ads/ads.js"></script>
		<script type="text/javascript" src="dist/video.js"></script>
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
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/2.mp4" href="javascript:void(0);">Porn MP4 1</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/3.mp4" href="javascript:void(0);">Porn MP4 2</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/4.mp4" href="javascript:void(0);">Porn MP4 3</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/5.mp4" href="javascript:void(0);">Porn MP4 4</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/8.mp4" href="javascript:void(0);">Porn MP4 5</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/11.mp4" href="javascript:void(0);">Porn MP4 6</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/12.mp4" href="javascript:void(0);">Porn MP4 7</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/13.mp4" href="javascript:void(0);">Porn MP4 8</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/14.mp4" href="javascript:void(0);">Porn MP4 9</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/15.mp4" href="javascript:void(0);">Porn MP4 10</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/16.mp4" href="javascript:void(0);">Porn MP4 11</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/17.mp4" href="javascript:void(0);">Porn MP4 12</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/20.mp4" href="javascript:void(0);">Porn MP4 13</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/23.mp4" href="javascript:void(0);">Porn MP4 14</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/27.mp4" href="javascript:void(0);">Porn MP4 15</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/32.mp4" href="javascript:void(0);">Porn MP4 16</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/33.mp4" href="javascript:void(0);">Porn MP4 17</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/36.mp4" href="javascript:void(0);">Porn MP4 18</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/37.mp4" href="javascript:void(0);">Porn MP4 19</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/38.mp4" href="javascript:void(0);">Porn MP4 20</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/39.mp4" href="javascript:void(0);">Porn MP4 21</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/40.mp4" href="javascript:void(0);">Porn MP4 22</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/41.mp4" href="javascript:void(0);">Porn MP4 23</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/42.mp4" href="javascript:void(0);">Porn MP4 24</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/48.mp4" href="javascript:void(0);">Porn MP4 25</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/62.mp4" href="javascript:void(0);">Porn MP4 26</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/65.mp4" href="javascript:void(0);">Porn MP4 27</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/67.mp4" href="javascript:void(0);">Porn MP4 28</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/68.mp4" href="javascript:void(0);">Porn MP4 29</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/73.mp4" href="javascript:void(0);">Porn MP4 30</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/77.mp4" href="javascript:void(0);">Porn MP4 31</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/79.mp4" href="javascript:void(0);">Porn MP4 32</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/84.mp4" href="javascript:void(0);">Porn MP4 33</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/86.mp4" href="javascript:void(0);">Porn MP4 34</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/88.mp4" href="javascript:void(0);">Porn MP4 35</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/89.mp4" href="javascript:void(0);">Porn MP4 36</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/90.mp4" href="javascript:void(0);">Porn MP4 37</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/92.mp4" href="javascript:void(0);">Porn MP4 38</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/99.mp4" href="javascript:void(0);">Porn MP4 39</a></li>
<li class="nav-item"><a class="channel nav-link" data-value="http://87.98.184.134/vidshd/56ea912c4df934c216c352fa8d623af3/10.mp4" href="javascript:void(0);">Porn MP4 40 </a></li>			
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ss5.firestormmedia.tv/ppv/passionxxxAdvert.stream/chunklist.m3u8" href="javascript:void(0);">Passion XXX Advert</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/bigass.m3u8" href="javascript:void(0);">Bigass</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/bigdick.m3u8" href="javascript:void(0);">Bigdick</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/bigtits.m3u8" href="javascript:void(0);">Bigtits</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/blowjob.m3u8" href="javascript:void(0);">Blowjob</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/cuckold.m3u8" href="javascript:void(0);">Cuckold</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/fetish.m3u8" href="javascript:void(0);">Fetish</a>
            </li>
			<li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/fluxuslust.m3u8" href="javascript:void(0);">Fluxuslust</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/hardcore.m3u8" href="javascript:void(0);">Hardcore</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/interracial.m3u8" href="javascript:void(0);">Interracial</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/latina.m3u8" href="javascript:void(0);">Latina</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/lesbian.m3u8" href="javascript:void(0);">Lesbian</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/milf.m3u8" href="javascript:void(0);">Milf</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/pornstar.m3u8" href="javascript:void(0);">Pornstar</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/pov.m3u8" href="javascript:void(0);">Pov</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/russian.m3u8" href="javascript:void(0);">Russian</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/teen.m3u8" href="javascript:void(0);">Teen</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.redtraffic.xyz/threesome.m3u8" href="javascript:void(0);">Threesome</a>
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
