<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Ayo Menulis</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body class="bgutama">
  
      <!-- Demo stuff-->

      <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
      </div>
     

    <center>
      <div class="d-flex justify-content-center" style="padding-top :10%;">
        <img class="logo" src="{{asset('assets/icon/logo.png')}}" alt="">
      </div>
      <div class="d-flex justify-content-center"style="padding-top :5%;">
        <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/icon_latihan.png')}}" alt=""></a>
        <a href="/ujian" onclick="btn_s()"><img class='icn' src="{{asset('assets/icon/icon_ujian.png')}}" alt=""></a>
        <a href="/tutorial" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/icon_tutorial.png')}}" alt=""></a>
        <a data-toggle="modal" data-target="#myModal" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/icon_about.png')}}" alt=""></a>
        <a  href="JavaScript:window.close()" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/icon_keluar.png')}}" alt=""></a>
      </div>
    
      <!-- Component starts here-->
      
    </center>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tentang Ayo Menulis</h4>
        </div>
        <div class="modal-body">
          <p>Aplikasi Permainan "Ayo Menulis" merupakan permainan edukasi. Edukasi yang diberikan berupa pembelajaran menulis huruf. Keunggulan dari aplikasi ini adalah terdapat asisten virtual yang dapat mengetahui benar atau tidaknya pemain menjawab</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <audio src="../assets/sound/touch.mp3" id="btn-s"></audio>
 
  
  
  </body>
  <script>
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
