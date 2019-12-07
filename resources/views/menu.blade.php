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
  <body class="bg2">
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

        <div style="padding-top:10%;">
        <center>
          <a href="/latihan" onclick="btn_s()"><img  class="icn_menu" src="{{asset('assets/icon/logo_h_b.png')}}" alt=""></a>
          <a href="/latihan_kecil" onclick="btn_s()"><img class='icn_menu' src="{{asset('assets/icon/logo_h_k.png')}}" alt=""></a>
          <a href="/latihan_angka" onclick="btn_s()"><img class="icn_menu" src="{{asset('assets/icon/logo_ang.png')}}" alt=""></a>
        </center>
        </div>
     
    <!-- Modal -->      

      <!-- Component starts here-->
      
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
