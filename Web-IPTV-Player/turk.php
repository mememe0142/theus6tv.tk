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
               <a class="channel nav-link" data-value="https://tv-trt1.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT 1</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trt2.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtavaz.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Avaz</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtcocuk.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Cocuk</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trthaber.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Haber</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtkurdi.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Kurdi</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtmuzik.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Muzik</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtturk.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Türk</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtworld.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT World</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtspor1.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Spor</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://tv-trtspor2.live.trt.com.tr/master.m3u8" href="javascript:void(0);">TRT Spor 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://lcgid8xu.rocketcdn.com/startvhd.stream_720p/chunklist.m3u8" href="javascript:void(0);">Star TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_star/smil:star_hd.smil/playlist.m3u8" href="javascript:void(0);">Star TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_kanald/smil:kanald_hd.smil/playlist.m3u8" href="javascript:void(0);">Kanal D</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_showtv/smil:show_hd.smil/playlist.m3u8" href="javascript:void(0);">Show</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_foxtv/smil:foxtv_hd.smil/playlist.m3u8" href="javascript:void(0);">FOX</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_tv8/smil:tv8_hd1.smil/playlist.m3u8" href="javascript:void(0);">TV8</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/karamel/karamel/chunklist.m3u8" href="javascript:void(0);">TV 4</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_apara/smil:apara_hd.smil/playlist.m3u8" href="javascript:void(0);">A Para</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_aspor/smil:aspor_hd.smil/playlist.m3u8" href="javascript:void(0);">A Spor</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_a2/smil:a2_hd.smil/playlist.m3u8" href="javascript:void(0);">A2TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://5be5d840359c6.streamlock.net/afyonturktv/afyonturktv/playlist.m3u8" href="javascript:void(0);">Afyon Turk TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://yayin3.canlitv.com:1935/canlitv/ahitv/chunklist.m3u8" href="javascript:void(0);">Ahi TV Kirsehir</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://akittv-live.ercdn.net/akittv/akittv.m3u8" href="javascript:void(0);">Akit TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.al-zahratv.com/live/playlist.m3u8" href="javascript:void(0);">Al-Zahra TV Turkic</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://live.al-zahratv.com/live/playlist2/index.m3u8" href="javascript:void(0);">Al-Zahra TV Turkic</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.taksimbilisim.com:1935/altastv/bant1/playlist.m3u8" href="javascript:void(0);">Altaş TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://kanalben.cubecdn.net/live/kanalben1.m3u8" href="javascript:void(0);">Ben TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://s01.vpis.io/besiktas/besiktas.m3u8" href="javascript:void(0);">Beşiktaş Web TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wms.brtk.net:1935/live/brt1/playlist.m3u8" href="javascript:void(0);">BRT 1 (Kıbrıs)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wms.brtk.net:1935/live/brt2/BratuMarian.m3u8" href="javascript:void(0);">BRT 2</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wms.brtk.net:1935/live/brt2/playlist.m3u8" href="javascript:void(0);">BRT 2 (Turkish)</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://win1.yayin.com.tr/bursatv/bursatv/chunklist.m3u8" href="javascript:void(0);">Bursa TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://canbroadcast.com:7000/canlican/tv.m3u8" href="javascript:void(0);">Can TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream2.taksimbilisim.com:1935/caytv/bant1/CAYTV.m3u8" href="javascript:void(0);">Cay TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cri.aa.net.tr:1935/belgesel/belgesel/chunklist_w120871004.m3u8" href="javascript:void(0);">CRI Turk Belgesel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.arkumedia.com:1935/dersim62tv/dersim62tv/playlist.m3u8" href="javascript:void(0);">Dersim62 TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://yayin3.canlitv.com:1935/live/diyalogtv/chunklist.m3u8" href="javascript:void(0);">Diyalog TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59cba4d34b678.streamlock.net/live/diyalogtv/chunklist.m3u8" href="javascript:void(0);">Diyalog TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://jviqfbc2.rocketcdn.com/dmax.smil/chunklist.m3u8" href="javascript:void(0);">DMAX</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://s01.vpis.io/dogustv/dogustv.m3u8" href="javascript:void(0);">Doğuş TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://mn-nl.mncdn.com/blutv_dream/smil:dream_sd.smil/playlist.m3u8" href="javascript:void(0);">Dream TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://broadcasttr.com:446/manisaetv/bant1/chunklist.m3u8" href="javascript:void(0);">ETV Manisa</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://xrklj56s.rocketcdn.com/eurostar.stream_360p/chunklist.m3u8" href="javascript:void(0);">EuroStar</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://live.arkumedia.com:1935/finansturktv/finansturktv/playlist.m3u8" href="javascript:void(0);">Finans Turk TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream2.taksimbilisim.com:1935/gtv/bant1/chunklist.m3u8" href="javascript:void(0);">Guneydoğu TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="rtmp://wowza.istweb.tv:1935/webtv/webtv_wowza1" href="javascript:void(0);">IBB TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wowza.istweb.tv:1935/dp/istanbul2/playlist.m3u8" href="javascript:void(0);">Istanbul Metropolitan Municipality</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://wowza.istweb.tv:1935/dp/istanbul2/playlist.m3u8?fluxustv.m3u8" href="javascript:void(0);">Istanbul Metropolitan Municipality</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.taksimbilisim.com:1935/kanal3/bant1/Kanal3.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kanal 3</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stream.taksimbilisim.com:1935/kanalurfa/bant1/chunklist_w1042205694.m3u8?fluxustv.m3u8" href="javascript:void(0);">Kanal Urfa</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://59cba4d34b678.streamlock.net/live/kontv/chunklist_w286386544.m3u8" href="javascript:void(0);">Kon TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://0ajuu84p.rocketcdn.com/kralpop_720/chunklist.m3u8" href="javascript:void(0);">Kral Pop</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://bqgsd19q.rocketcdn.com/kralpop_720/chunklist.m3u8" href="javascript:void(0);">Kral Pop</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://0ajuu84p.rocketcdn.com/kraltv_720/chunklist.m3u8" href="javascript:void(0);">Kral TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://mid5dg6m.rocketcdn.com/kraltv_720/chunklist.m3u8" href="javascript:void(0);">Kral TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://stmpo0wa.rocketcdn.com/kralworldtv_720/chunklist.m3u8" href="javascript:void(0);">Kral World</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://137.74.205.201/live3/mm-3mbps.m3u8" href="javascript:void(0);">Med Muzîk</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://metrotv.garantisistem.com:1935/metrotv/metrohd/chunklist.m3u8" href="javascript:void(0);">Metro TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://broadcasttr.com:1935/naturaltv/bant1/playlist.m3u8" href="javascript:void(0);">Natural TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://broadcasttr.com:446/naturaltv/bant1/chunklist.m3u8" href="javascript:void(0);">Natural TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://nt4p9nef.rocketcdn.com/ntvhd.stream_360p/chunklist.m3u8" href="javascript:void(0);">NTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://nt4p9nef.rocketcdn.com/ntvhd.stream_720p/chunklist.m3u8" href="javascript:void(0);">NTV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://yayin.netradyom.com:1935/live/on4/playlist.m3u8" href="javascript:void(0);">ON4 TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://livetv.powerapp.com.tr/powerturktv/powerturkhd.smil/chunklist_b2650000_sltur.m3u8" href="javascript:void(0);">Power Türk</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://svs.itworkscdn.net/rudawlive/rudawlive.smil/playlist.m3u8" href="javascript:void(0);">Rudaw</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://unirtmp.tulix.tv/sat7turk/satturklive-web.smil/playlist.m3u8" href="javascript:void(0);">SAT7 TURK</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://speda.teradek.live:1935/live/spedahd/playlist.m3u8" href="javascript:void(0);">Speda</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://mecliscanlitv-lh.akamaihd.net:80/i/MECLISTV_1@127503/master.m3u8" href="javascript:void(0);">TBMM TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn1.streamencoding.com:1935/tgrt_belgesel/amlst:live-30/playlist.m3u8" href="javascript:void(0);">TGRT Belgesel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn1.streamencoding.com:1935/tgrt_belgesel/tgrt3/playlist.m3u8" href="javascript:void(0);">TGRT Belgesel</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://cdn1.streamencoding.com:1935/tgrt_haber/tgrt3/playlist.m3u8" href="javascript:void(0);">TGRT Haber</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://stream.tiviturk.de/live/tiviturk.m3u8" href="javascript:void(0);">tivi TÜRK</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://tjktv.ercdn.net/tjktv.m3u8" href="javascript:void(0);">TJK TV</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://pa9agxjg.rocketcdn.com/tlctv.smil/chunklist.sltur.m3u8" href="javascript:void(0);">TLC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://pa9agxjg.rocketcdn.com/tlctv.smil/chunklist_b2328000_sltur.m3u8" href="javascript:void(0);">TLC</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="http://116.203.71.169/hls/stream1.m3u8" href="javascript:void(0);">Türkmeneli</a>
            </li>
            <li class="nav-item">
               <a class="channel nav-link" data-value="https://ucankus-live.cdnnew.com/ucankus/ucankus.m3u8" href="javascript:void(0);">UçanKuş TV</a>
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
