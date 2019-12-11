<!DOCTYPE html>
<html>

<head>
    <title>Ayo Menulis</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script>
    <script src="{{asset('js/imageProcessing/preProcessing.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/imageProcessing/opencv.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('js/machineLearning/tf.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('js/machineLearning/makeData.js')}}" type="text/javascript"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>

</head>

<body class="bg3">

    <main>

        <div class="loader-wrapper" style="position:absolute;z-index:1;">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <div>

            <a href="/menu" onclick="btn_s()"><img class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""
                    style="position:absolute;"></a>
            <div class="container-fluid"
                style="background :url(../assets/icon/bgnav.png);  position:absolute; z-index:-1; height:100px;">
                <div class="menua">
                    <a href="/menu" "><img class=" icn_sw" src="{{asset('assets/icon/icon_skor.png')}}" alt=""></a>
                    <a href="/menu" "><img class=" icn_sw" src="{{asset('assets/icon/icon_waktu.png')}}" alt=""></a>
                </div>
            </div>
            <div>
                <center>
                    <img class="icn_logo" src="{{asset('assets/icon/logo_h_b.png')}}" alt=""></h3>
                </center>
            </div>
        </div>

        <div class="d-flex justify-content-center">

            <img class="papan" src="{{asset('assets/icon/papan.png')}}" alt="">
            <canvas id="gambar" width="480" height="300"
                style="background : rgba(255, 255, 255, 0.1); top :275px; position:absolute"></canvas>
        </div>
        <br><br>

        <div class="bottom_left">
            <div>
                <img class="bubble" src="{{asset('assets/icon/bubble.png')}}" alt=""></h3>
                <div style="padding-left:180px;padding-top:70px">
                    <center>
                        <h5>AYO TULIS HURUF INI !</h5>
                        <select name="carlist" form="carform" id="masuk" onchange="inputan()">
                            <option value="A" selected>A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="W">W</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>
                        <div>
                            <img id="srcImage2" src="../../template/A.jpg" width="64" height="64">
                        </div>
                    </center>
                </div>
            </div><br>
            </center>
            <br>
            <img class="icn_anak" src="{{asset('assets/icon/anak.png')}}" alt=""></h3>
        </div>


        <div class="d-flex justify-content-center" style="padding-top:23%">
            <a onclick="btn_s();periksa()"><img class="icn" src="{{asset('assets/icon/icon_periksa.png')}}" alt=""></a>
            <a onclick="btn_s();hapus()"><img class="icn" src="{{asset('assets/icon/icon_hapus.png')}}" alt=""></a>
        </div>

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


</body>
<script type="text/javascript">
    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut("slow");
    });
    var sound = document.getElementById('btn-s');
    var sound_b = document.getElementById('btn-benar');
    var sound_s = document.getElementById('btn-salah');

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

    // var score =0;
    var input = document.getElementById("masuk").value;
    document.getElementById("srcImage2").src = "../../template/" + input + ".jpg";

    var canvasTemplate = document.getElementById('outputTemplate');
    var context = canvasTemplate.getContext('2d');

    make_base();

    function make_base() {
        base_image = new Image();
        base_image.src = document.getElementById("srcImage2").src;
        base_image.onload = function () {
            context.drawImage(base_image, 0, 0);
        }
    }

    function periksa() {

        let src = cv.imread(document.getElementById("gambar"));
        let dst = new cv.Mat();
        let dsize = new cv.Size(64, 64);
        cv.resize(src, dst, dsize, 0, 0, cv.INTER_AREA);
        cv.imshow('outputCanvas', dst);
        colorImage(cv.imread('outputCanvas'), dst);
        var kanvas = document.getElementById('outputCanvas2');
        thinningImage2(kanvas);
        var kanvas2 = document.getElementById('outputCanvas3');
        tepi(kanvas2);
        var kanvas3 = document.getElementById('outputCanvas4');
        var ctx = kanvas3.getContext('2d');
        var imgData = ctx.getImageData(0, 0, 64, 64);

        templateData = context.getImageData(0, 0, 64, 64);

        //template matching
        var batasAtas = 0;
        var nilai = 0; 

        for (var i = 0; i < imgData.data.length; i += 4) {
            if (templateData.data[i] == 0) {
                // batasAtas++;
                batasAtas = 64 * 64;
            }
            // nilai = nilai + ((1-Math.round(templateData.data[i]/255)) * (1-Math.round(imgData.data[i]/255)));
            nilai = nilai + Math.pow(((1 - Math.round(templateData.data[i] / 255)) - (1 - Math.round(imgData.data[i] / 255))), 2);
        }

        console.log(batasAtas);
        console.log(nilai);
        //if(nilai>=(batasAtas*80/100)){
        // threshold
        if (nilai <= (batasAtas * 15 / 100)) {
          
        // score = score + 10 ;
            // alert("Jawaban Benar "+score);
            alert("Jawaban Benar ");
            sound_benar();

        } else {
            
        //score = score - 10;
            alert("Jawaban Salah");
            sound_salah();

        }
        src.delete();
        dst.delete();
    }

    function inputan() {
        input = document.getElementById("masuk").value;
        document.getElementById("srcImage2").src = "../../template/" + input + ".jpg";
        var c = document.getElementById("gambar");
        c.width = c.width;
        make_base();
    }

    function hapus() {

        var c = document.getElementById("gambar");
        c.width = c.width;
        // var ctx = c.getContext("2d");
        // ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
</script>

<!-- <script type="text/javascript">
var canvas = document.getElementById('gambar');
var context = canvas.getContext('2d');

var radius = 5; 
var start = 0;
var end = Math.PI * 2;
var dragging = false;

// canvas.width = 64; 
// canvas.height = 64; 
context.lineWidth = radius * 2;  

var putPoint = function(e){
    if(dragging){
        context.lineTo(e.offsetX, e.offsetY);
        context.stroke();
        context.beginPath(); 
        context.arc(e.offsetX, e.offsetY, radius, start, end);
        context.fill();  
        context.beginPath();
        context.moveTo(e.offsetX, e.offsetY);
    }
}

var engage = function(e){
    dragging = true;
    putPoint(e);
}

var disengage = function(){
    dragging = false;
    context.beginPath();
}

canvas.addEventListener('mousedown', engage);
canvas.addEventListener('mousemove', putPoint);
canvas.addEventListener('mouseup', disengage);
</script> -->

<script type="text/javascript">
    var canvas = document.getElementById("gambar");
    var ctx = canvas.getContext("2d");
    ctx.strokeStyle = "#000000";
    ctx.lineWidth = 10;

    // Set up mouse events for drawing
    var drawing = false;
    var mousePos = {
        x: 0,
        y: 0
    };
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
                window.setTimeout(callback, 1000 / 60);
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
    (function drawLoop() {
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


    var timeLeft = 30;
    var elem = document.getElementById('countdown');
    var timerId = setInterval(countdown, 1000);

    function countdown() {
        if (timeLeft == -1) {
            clearTimeout(timerId);
            alert("Waktu Habis");
        } else {
            elem.innerHTML = timeLeft + ' seconds remaining';
            timeLeft--;
        }
    }


</script>
     
</html>