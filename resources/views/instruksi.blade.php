<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Ayo Menulis</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/instruksi.css')}}"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
  </head>
  <body class="bginstruksi">
      <!-- Demo stuff-->
 >
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
      </div>
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight" style="padding-left : 5%;">
            <a href="/" onclick="btn_s()"><img  class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""></a>
          </div>
        </div>

        <!-- <div style="padding-top:10%;">
        <center>
          <a href="/instruksi" onclick="btn_s()"><img  class="icn_menu" src="{{asset('assets/icon/logo_h_b.png')}}" alt=""></a>
          <a href="/latihan_kecil" onclick="btn_s()"><img class='icn_menu' src="{{asset('assets/icon/logo_h_k.png')}}" alt=""></a>
          <a href="/latihan_angka" onclick="btn_s()"><img class="icn_menu" src="{{asset('assets/icon/logo_ang.png')}}" alt=""></a>
        </center>
        </div> -->
        <center>
        <div class="container" style="height:25%;">
            <div id="myCarousel" style="height:25%;" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

          <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="{{asset('assets/icon/back.png')}}" alt="Los Angeles">
              </div>

              <div class="item">
                <img src="{{asset('assets/icon/back.png')}}" alt="Chicago">
              </div>

              <div class="item">
                <img src="{{asset('assets/icon/back.png')}}" alt="New York">
              </div>
            </div>

          <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <a href="/latihan" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/mulai.png')}}" alt=""></a>
        <a data-toggle="modal" data-target="#myModal" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/icon_about.png')}}" alt=""></a>
        </center>
        
        <!-- <img class="icn_anak2" src="{{asset('assets/icon/anak2.png')}}" alt="">
        <img class="icn_anak2" src="{{asset('assets/icon/anak3.png')}}" alt="">< -->

        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="">
            <div >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img class="close_modal" src="{{asset('assets/icon/close_btn.png')}}" alt="">
            </div>
            <center>
            <div>
                <img class="logo" src="{{asset('assets/icon/modal_benar.png')}}" alt="">
            </div>
            <div>
                <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/tombol_modal_next.png')}}" alt=""></a>
                <a href="/ujian" onclick="btn_s()"><img class='icn' src="{{asset('assets/icon/tombol_modal_ulang.png')}}" alt=""></a>
            </div>
            </center>
            </div>

        </div>
    </div> 
     
    <!-- Modal -->      

      <!-- Component starts here-->
      
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

    // carousel

    
    // 
  </script>

</html>
