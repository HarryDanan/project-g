<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Ayo Menulis</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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

      <!--  -->
     
    <center>
      <!-- logo -->

      <div style="padding-top :10%;">
        <img class="logo" src="{{asset('assets/icon/logo.png')}}" alt="">
      </div>

      <!-- logo end -->

      <!-- icon menu -->
      <div style="padding-top : 5%">
        <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/btn_latihan.png')}}" alt=""></a>
        <a href="/ujian" onclick="btn_s()"><img class='icn' src="{{asset('assets/icon/btn_ujian.png')}}" alt=""></a>
        <a href="/tutorial" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_tutorial.png')}}" alt=""></a>
        <a data-toggle="modal" href="#myModal" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_about.png')}}" alt=""></a>
        <a  href="JavaScript:window.close()" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_keluar.png')}}" alt=""></a>
      </div>

      <!-- icon menu end -->      
    </center>

    <!-- Modal  -->    
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="">
            <div >
                <img onclick="btn_s() "class="close_modal" src="{{asset('assets/icon/close_btn.png')}}" data-dismiss="modal" alt="">&times;</img>
            </div>
            <center>
            <div>
                <img class="about_modal" src="{{asset('assets/icon/about_bill.png')}}" alt="">
            </div>
            </center>
            </div>
        </div>
    </div> 
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
