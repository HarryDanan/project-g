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
    <main style="">
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="p-2 bd-highlight">
          <a href="/" onclick="bleep.play()"><img  class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""></a>
          </div>
        </div>

        <div style="padding-top:15%;">
        <center>
          <a href="/latihan" onclick="bleep.play()"><img  class="icn" src="{{asset('assets/icon/icon_latihan.png')}}" alt=""></a>
          <a href="/latihan_kecil" onclick="bleep.play()"><img class='icn' src="{{asset('assets/icon/icon_ujian.png')}}" alt=""></a>
          <a href="/latihan_angka" onclick="bleep.play()"><img class="icn" src="{{asset('assets/icon/icon_tutorial.png')}}" alt=""></a>
        </center>
        </div>
     
    <!-- Modal -->      
    </main>
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
  
  
  
  </body>
  <script type="text/javascript">
    var bleep = new Audio();
    bleep.src = '../assets/sound/touch.mp3';
  </script>
</html>
