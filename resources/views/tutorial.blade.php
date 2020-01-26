<!DOCTYPE html>
<html lang="en" >
  <head>
  <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Ayo Menulis</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  </head>
  <body class="bg2">
      <!-- Demo stuff-->
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div>
      <div class="p-2 bd-highlight" style="padding-left : 20%;">
            <a href="/" onclick="btn_s()"><img  class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""></a>
      </div>
    </div>

    <div class="container" style="padding-top:10%;">
      <center>
      <a width="1280" height="720" data-fancybox href="hhttps://www.youtube.com/watch?v=BykRCC_kdgY;autoplay=1&amp;rel=0&amp;showinfo=0">
        <img src="{{asset('assets/thumbnail/thumbnail_angka_2.png')}}" class="img-fluid">
      </a>
      <a width="1280" height="720" data-fancybox href="https://www.youtube.com/watch?v=-Yh0WqCFmzs">
        <img src="{{asset('assets/thumbnail/thumbnail_huruf_2.png')}}" class="img-fluid">
      </a>
      <a width="1280" height="720" data-fancybox href="https://www.youtube.com/watch?v=aFvhRyIuBNQ&t=24s">
        <img src="{{asset('assets/thumbnail/thumbnail_huruf2_2.png')}}" class="img-fluid">
      </a>
      </center>
    </div>

    
  <audio src="../assets/sound/touch.mp3" id="btn-s"></audio>
  
  
  </body>
  
  <script type="text/javascript">

      $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
    });

     var sound = document.getElementById('btn-s');
      function btn_s (){
      sound.pause();
      sound.currentTime = 0;
      sound.play();
    }
  </script>
</html>
