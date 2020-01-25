<!DOCTYPE html>
<html>

<head>
    <title>Ayo Menulis</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script> -->
    <script src="{{asset('js/imageProcessing/preProcessing.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/imageProcessing/opencv.js')}}" type="text/javascript"></script> 
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body class="bg3">

    <main>

        <div class="loader-wrapper" style="position:absolute;z-index:2;">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>

        <div>

            <a href="/menu" onclick="btn_s()"><img class="icn2" src="{{asset('assets/icon/back.png')}}" alt="" style="position:fixed;"></a>

            <div class="container-fluid" style="background :url(../assets/icon/bgnav.png);  position:fixed; z-index:-1; height:13%;"></div>     
            
            <div class="menua">
                <a href="" class ="score" id="livecount" style="color : white; padding-top:2.2%; padding-left:2.2%"></a>
                <a href="" class ="score" id="score" style="color : #00bfff; padding-top:2.2%; padding-left:10%"></a>
                <a href="" class ="score" id="countdown" style="color : red; padding-top:2.2%; padding-left:22%"></a>

                <a href="" ><img class=" icn_darah" src="{{asset('assets/icon/darah.png')}}" alt=""></a>
                <a href="" ><img class=" icn_sw" src="{{asset('assets/icon/icon_skor.png')}}" alt=""></a>
                <a href="" ><img class=" icn_sw" src="{{asset('assets/icon/icon_waktu.png')}}" alt=""></a>
            </div>
            <div>
                <center>
                    <img class="icn_logo" src="{{asset('assets/icon/logo_h_b.png')}}" alt=""></h3>
                </center>
            </div>
        </div>

        <div class="d-flex justify-content-center">
        <!-- pop up benar dan salah -->
            <img  id="pop_benar" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_benar.png')}}" alt="">
            <img  id="pop_salah" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_salah.png')}}" alt="">
            <img  id="pop_kanvas" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_kanvas.png')}}" alt="">
        <!-- pop up benar dan salah end -->
            <img class="papan" src="{{asset('assets/icon/papan.png')}}" alt="">
            <canvas id="gambar" width="192" height="192" style="background-color: white; top :40%; position:fixed; border:2px solid #000000;"></canvas>
        </div>
        <br><br>

        <div class="bottom_left">
            <div>
                <img class="bubble" src="{{asset('assets/icon/bubble.png')}}" alt="">
                    <img class="icn_ayo" src="{{asset('assets/icon/ayo.png')}}" alt=""><br>
                    <div class="isi_bubble">
                        <center>
                        <div>
                            <img id="srcImage2" src="" width="64" height="64">
                        </div>
                    
                            <select class="selectpicker "name="carlist" form="carform" id="masuk" onchange="inputan()">
                                <option value="a" selected>A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                                <option value="f">F</option>
                                <option value="g">G</option>
                                <option value="h">H</option>
                                <option value="i">I</option>
                                <option value="j">J</option>
                                <option value="k">K</option>
                                <option value="l">L</option>
                                <option value="m">M</option>
                                <option value="n">N</option>
                                <option value="o">O</option>
                                <option value="p">P</option>
                                <option value="q">Q</option>
                                <option value="r">R</option>
                                <option value="s">S</option>
                                <option value="t">T</option>
                                <option value="u">U</option>
                                <option value="v">V</option>
                                <option value="w">W</option>
                                <option value="x">X</option>
                                <option value="y">Y</option>
                                <option value="z">Z</option>
                            </select>
                        </center>
                        </div>
                        <!-- <div>
                            <img id="srcImage3" src="" width="120" height="120">
                        </div> -->
                
            </div>
            
            <br>
            <img class="icn_anak" src="{{asset('assets/icon/anak.png')}}" alt=""></h3>
        </div>

        <center>
        <div  style="padding-top:23%">
            <a id="check" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_periksa.png')}}" alt=""></a>
            <a onclick="btn_s();hapus()"><img class="icn" src="{{asset('assets/icon/btn_hapus.png')}}" alt=""></a>
            <img src="" alt="">
        </div>
        </center>

        <div hidden class="row">
            <div class="col-sm-3">
                <h5>Gambar Template</h5>
                <canvas width="64" height="64" id='outputTemplate'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Resize</h5>
                <canvas width="64" height="64" id='outputCanvas'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Black And White</h5>
                <canvas width="64" height="64" id='outputCanvas2'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Skletoning</h5>
                <canvas width="64" height="64" id='outputCanvas3'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Tanpa Tepi</h5>
                <canvas width="64" height="64" id='outputCanvas4'></canvas>
            </div>
        </div>
        <audio src="../assets/sound/touch.mp3" id="btn-s"></audio>
        <audio src="../assets/sound/benar.mp3" id="btn-benar"></audio>
        <audio src="../assets/sound/salah.mp3" id="btn-salah"></audio>
    </main>

    <!-- Modal waktu -->
    <div id="myModal_waktu" class="modal fade" role="dialog">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="container">
                    <img class="about_modal" style="width:100%;height:100%;" src="{{asset('assets/icon/waktu_habis_popup.png')}}" alt="">
                    
                </div>
                <div class="container" style="padding-left:10%;">
                     <a href="/menu" onclick="btn_s()"><img  style ="width:45%;" src="{{asset('assets/icon/btn_lihat_skor.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div> 

        <!-- modal skor -->
    <div id="myModal_skor" class="modal fade" role="dialog" >
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="container">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <img onclick="btn_s()"class="close_modal" src="{{asset('assets/icon/close_btn.png')}}" data-dismiss="modal" alt="">&times;</img>
                </div>
                <div class="container" style="">
                    <img class="skor_modal" style="width:100%;height:100%;"src="{{asset('assets/icon/skor_modal.png')}}" alt="">
                </div>
                <div class="container" style="padding-left:10%;">
                    <a href="/menu" onclick="btn_s()"><img  style ="width:45%;" src="{{asset('assets/icon/btn_ulang.png')}}" alt=""></a>
                    <a href="/" onclick="btn_s()"><img style ="width:45%;" src="{{asset('assets/icon/btn_keluar.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div> 
     <!-- carousel -->
</body>

     
<script type="text/javascript">
    // loading

    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut("slow");
    });

    // loading end
    // sound

    var sound = document.getElementById('btn-s');
    var sound_b = document.getElementById('btn-benar');
    var sound_s = document.getElementById('btn-salah');

    // sound end

    // sound click

    function btn_s() {
        sound.pause();
        sound.currentTime = 0;
        sound.play();
    }
    function sound_salah(){
        sound_s.pause();
        sound_s.currentTime = 0;
        sound_s.play();
    }
    function sound_benar(){
        sound_b.pause();
        sound_b.currentTime = 0;
        sound_b.play();
    }

    //sound click end

    // var score =0;
    var input = document.getElementById("masuk").value;
    document.getElementById("srcImage2").src = "../../template/" + input + ".jpg";
    var canvasTemplate = document.getElementById('outputTemplate');
    var context = canvasTemplate.getContext('2d');

    make_base();

    function make_base() { //membuat inputgambar template
        base_image = new Image();
        base_image.src = document.getElementById("srcImage2").src;
    
        base_image.onload = function () {
            context.drawImage(base_image, 0, 0);
        }
    }

    var timeLeft = 120; //setting timer
    var liveleft =3; //setting jumlah nyawa
    var point = 0; //skor

    // check kanvas kosong
    function isCanvasBlank(canvas) {
        const context = canvas.getContext('2d');

        const pixelBuffer = new Uint32Array(
            context.getImageData(0, 0, canvas.width, canvas.height).data.buffer
        );

        return !pixelBuffer.some(color => color !== 0);
    }

    document.getElementById('check').addEventListener('click', function() {
        const blank = isCanvasBlank(document.getElementById('gambar'));
        if(blank){

            sound_salah();
            $("#pop_kanvas").fadeIn();
            $("#pop_kanvas").fadeOut('slow');
        }
        
    });


    // check end
    // periksa
    function periksa(){
   
    let src = cv.imread(document.getElementById("gambar"));
    let dst = new cv.Mat();
    let dsize = new cv.Size(64,64);
    cv.resize(src, dst, dsize, 0, 0, cv.INTER_AREA);
    cv.imshow('outputCanvas', dst);
    colorImage(cv.imread('outputCanvas'), dst);
    var kanvas = document.getElementById('outputCanvas2');
    thinningImage2(kanvas);
    var kanvas2 = document.getElementById('outputCanvas3');
    tepi(kanvas2);
    var kanvas3 = document.getElementById('outputCanvas4');
    var ctx = kanvas3.getContext('2d');
    var imgData = ctx.getImageData(0,0,64,64);
    var darah = 3;
    templateData = context.getImageData(0,0,64,64);

    var batasAtas=0; var nilai=0;
    for(var i = 0; i<imgData.data.length; i+=4){
    	if(templateData.data[i]==0){
    		// batasAtas++;
        batasAtas = 64*64;
    	}
    	// nilai = nilai + ((1-Math.round(templateData.data[i]/255)) * (1-Math.round(imgData.data[i]/255)));
    	nilai = nilai + Math.pow(((1-Math.round(templateData.data[i]/255)) - (1-Math.round(imgData.data[i]/255))),2);
    }

    console.log(batasAtas);
    console.log(nilai);
    //if(nilai>=(batasAtas*80/100)){
    if(nilai<=(batasAtas*20/100)){
        sound_benar();
        point=point+10;
       
        $("#pop_benar").fadeIn();
        $("#pop_benar").fadeOut('slow');
    }
    else{
        sound_salah();
        liveleft--;
        // alert("Salah");
        $("#pop_salah").fadeIn();
        $("#pop_salah").fadeOut('slow');
    }
        src.delete(); dst.delete();
	}

    // periksa

    

    //darah 
    var liveelem = document.getElementById('livecount');
    var liveid = setInterval(livecount, 0);

    function livecount() {
        if (liveleft == -1) {
            clearTimeout(liveid);
            // alert("Darah Habis");
            $('#myModal_skor').modal({backdrop: 'static', keyboard: false})  
            $("#myModal_skor").modal('show');
            
        } else {
            liveelem.innerHTML = liveleft;
            
            //timeLeft--;
        }
    }

    // waktu
    var elem = document.getElementById('countdown');
    var timerId = setInterval(countdown, 10);
    function countdown() {
        if (timeLeft == -1) {
            clearTimeout(timerId);
            // alert("Waktu Habis");
            // call_modal_waktu();
            $('#myModal_skor').modal({backdrop: 'static', keyboard: false})  
            $("#myModal_skor").modal('show');
            
        } else {
            elem.innerHTML = timeLeft;
            timeLeft--;
        }
    }


    //score 
    var selem = document.getElementById('score');
    var scoreid = setInterval(score, 0);
    function score(){
        selem.innerHTML = point;
    }

    // var selem_m = document.getElementById('score_m');
    // var scoreid_m = setInterval(score_m, 0);
    // function score_m(){
    //     selem_m.innerHTML = point;
    // }


    function inputan(){
        input = document.getElementById("masuk").value;
        document.getElementById("srcImage2").src = "../../template/"+input+".jpg";
        // document.getElementById("srcImage3").src = "../../template/bewarna/"+input+".png";
        var c = document.getElementById("gambar");c.width = c.width;
        make_base();
    }

    function hapus(){
        var c = document.getElementById("gambar");c.width = c.width;
        // var ctx = c.getContext("2d");
        // ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

</script>

<script type="text/javascript">
    var canvas = document.getElementById("gambar");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#000000";
    ctx.lineWidth = 10;

    // Set up mouse events for drawing
    var drawing = false;
    var mousePos = { x:0, y:0 };
    var lastPos = mousePos;
    canvas.addEventListener("mousedown", function (e) {
            drawing = true;
    lastPos = getMousePos(canvas, e);
    }, false);
    canvas.addEventListener("mouseup", function (e) {
    drawing = false;
    }, false);
    canvas.addEventListener("mousemove", function (e) {
    mousePos = getMousePos(canvas, e);
    }, false);

    // Get the position of the mouse relative to the canvas
    function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
    };
    }

    // Get a regular interval for drawing to the screen
    window.requestAnimFrame = (function (callback) {
            return window.requestAnimationFrame || 
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            window.oRequestAnimationFrame ||
            window.msRequestAnimaitonFrame ||
            function (callback) {
            window.setTimeout(callback, 1000/60);
            };
    })();

    // Draw to the canvas
    function renderCanvas() {
    if (drawing) {
        ctx.strokeStyle = "#000000";
        ctx.lineWidth = 10;
        ctx.moveTo(lastPos.x, lastPos.y);
        ctx.lineTo(mousePos.x, mousePos.y);
        ctx.stroke();
        lastPos = mousePos;
    }
    }

    // Allow for animation
    (function drawLoop () {
    requestAnimFrame(drawLoop);
    renderCanvas();
    })();

    // Set up touch events for mobile, etc
    canvas.addEventListener("touchstart", function (e) {
            mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousedown", {
        clientX: touch.clientX,
        clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
    }, false);
    canvas.addEventListener("touchend", function (e) {
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
    }, false);
    canvas.addEventListener("touchmove", function (e) {
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousemove", {
        clientX: touch.clientX,
        clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
    }, false);

    // Get the position of a touch relative to the canvas
    function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
        x: touchEvent.touches[0].clientX - rect.left,
        y: touchEvent.touches[0].clientY - rect.top
    };
    }

</script>

     
</html>