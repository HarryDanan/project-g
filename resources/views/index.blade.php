<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Ayo Menulis</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body class="bgutama">
  
      <!-- loading screen -->

      <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
      </div>
      <div class="container-fluid">
        <div class="float-right">
          <a data-toggle="modal" href="#myModal" onclick="btn_s()"><img style="width: 64px;height:64px" src="{{asset('assets/icon/btn_helpper.png')}}" alt=""></a>
        </div>
      </div>

      <!--  -->
     
    <center>
      <!-- logo -->

      <div style="padding-top :10%;">
        <img class="logo" src="{{asset('assets/icon/logo.png')}}" alt="">
      </div>

      <!-- logo end -->
      <div hidden>
        <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/btn_play.png')}}" alt=""></a>
      </div>
      <!-- icon menu -->
      <div style="padding-top : 5%">
        <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/btn_latihan.png')}}" alt=""></a>
        <a href="/menu_ujian" onclick="btn_s()"><img class='icn' src="{{asset('assets/icon/btn_ujian.png')}}" alt=""></a>
        <a href="/tutorial" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_tutorial.png')}}" alt=""></a>
        <a  href="JavaScript:window.close()" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_keluar.png')}}" alt=""></a>
      </div>

      <!-- icon menu end -->      
    </center>

    <!-- Modal  -->    
    <div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            <div >
                <img onclick="btn_s()"class="close_modal" src="{{asset('assets/icon/close_btn.png')}}" data-dismiss="modal" alt="">&times;</img>
            </div>
            <center>
            <div>
                <img class="about_modal" style="width:100%;height:100%;" src="{{asset('assets/icon/about_bill.png')}}" alt="">
            </div>
            </center>
            </div>
        </div>
    </div> 
    <!-- Modal -->
    <!-- <button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div id="demo" class="carousel slide" data-interval="false" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <center>
            <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('assets/icon/back.png')}}" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets/icon/back.png')}}" alt="Chicago">
                </div>
                <div class="carousel-item">
                  <img src="{{asset('assets/icon/back.png')}}" alt="New York"><br>
                  <a href="/latihan" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/btn_mulai.png')}}" alt=""></a>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <img style="width:25%;"src="{{asset('assets/icon/btn_back.png')}}">
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <img style="width:25%;"src="{{asset('assets/icon/btn_next.png')}}">
              </a>
            </center>
          </div>
        </div>
      </div>
    </div>
    <audio src="../assets/sound/touch.mp3" id="btn-s"></audio>
  </body>

  <script>
    // loading screen
    $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
    });
    // loading screen end

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
