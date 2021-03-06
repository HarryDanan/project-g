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
      <div class="container table-skor">
        <table class="table">
          <thead class="header_table">
            <tr>
                <td scope="col">NO</td>
                <td scope="col">NAMA</td>
                <td scope="col">KATEGORI</td>
                <td scope="col">SCORE</td>

            </tr>
          </thead>
          <tbody class="header_table">
            @foreach($score as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->nama}}</td>
                <td>{{$s->tipe}}</td>
                <td>{{$s->nilai}}</td>
            </tr>
            @endforeach
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
