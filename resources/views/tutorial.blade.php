<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Ayo Menulis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>
  <body class="bg2">
      <!-- Demo stuff-->
 >
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div>
      <div class="p-2 bd-highlight" style="padding-left : 20%;">
            <a href="/" onclick="btn_s()"><img  class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""></a>
      </div>
    </div>

    <div style="padding-top:10%;">
      <center>
        <div>
          <a href="hhttps://www.youtube.com/watch?v=BykRCC_kdgY" data-toggle="lightbox"  data-width="1280" data-gallery="youtubevideos" class="col-sm-4">
            <img src="{{asset('assets/thumbnail/thumbnail_angka_2.png')}}" class="img-fluid">
          </a>
        </div>
        <div>
          <a href="https://www.youtube.com/watch?v=-Yh0WqCFmzs" data-toggle="lightbox" data-width="1280" data-gallery="youtubevideos" class="col-sm-4">
            <img src="{{asset('assets/thumbnail/thumbnail_huruf_2.png')}}" class="img-fluid">
          </a>
        </div>
        <div>
          <a href="https://www.youtube.com/watch?v=aFvhRyIuBNQ&t=24s" data-toggle="lightbox" data-width="1280" data-gallery="youtubevideos" class="col-sm-4">
            <img src="{{asset('assets/thumbnail/thumbnail_huruf2_2.png')}}" class="img-fluid">
          </a>
        </div>          
      </center>
    </div>

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
	//   lightbox
		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
						event.preventDefault();
						$(this).ekkoLightbox();
		});
	// lightbox

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
