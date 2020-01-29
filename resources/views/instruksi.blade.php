<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Ayo Menulis</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body class="bg_instruksi">
    
    <!-- loading screen -->
    <div class="loader-wrapper" style="z-index: 9999999">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <!-- loading screen -->
    <!-- icon back -->
      <div>
          <div class="p-2 bd-highlight" style="padding-left : 5%;">
            <a href="/menu" onclick="btn_s()"><img  class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""></a>
          </div>
      </div>
      <!-- icon back -->

      <!-- carousel -->
      <center>
      <div id="demo" class="carousel slide" data-interval="false" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/icon/back.png')}}" alt="Los Angeles">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/icon/back.png')}}" alt="Chicago">
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/icon/back.png')}}" alt="New York">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <img style="width:25%;"src="{{asset('assets/icon/btn_back.png')}}">
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <img style="width:25%;"src="{{asset('assets/icon/btn_next.png')}}">
        </a>

      </div>
        
        <a href="/latihan" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/btn_mulai.png')}}" alt=""></a>
      </center>
      <!-- carousel end -->
        
        <!-- <img class="icn_anak2" src="{{asset('assets/icon/anak2.png')}}" alt="">
        <img class="icn_anak2" src="{{asset('assets/icon/anak3.png')}}" alt="">< -->
      
    <audio src="../assets/sound/touch.mp3" id="btn-s"></audio>
  </body>

  <!-- loading -->

  <script type="text/javascript">
      $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
    });

  // loading end
  // sound click 

     var sound = document.getElementById('btn-s');
      function btn_s (){
      sound.pause();
      sound.currentTime = 0;
      sound.play();
    }

    // sound click end
  </script>
</html>
