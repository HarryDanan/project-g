<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Ayo Menulis</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
  </head>
  <body class="bg_scoreboard">
      <!-- Demo stuff-->
  <!-- loading -->

    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <!-- loading end -->
      <div>
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
        <div class="container" style="padding-top : 5%;color:white">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
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
  </script>
</html>
