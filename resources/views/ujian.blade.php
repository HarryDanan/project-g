<!DOCTYPE html>
<html>
<head>
    <title>Ayo Menulis</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/imageProcessing/preProcessing.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/imageProcessing/opencv.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('js/machineLearning/tf.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('js/machineLearning/makeData.js')}}" type="text/javascript"></script> -->
</head>
<body class="bg3">
    <br><center><h3>UJIAN MENULIS</h3></center><br>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary" onclick="window.location.href = '/';">Menu</button>
    </div>
    <div class="d-flex justify-content-center">
        <canvas id="gambar" width="320" height="320" style="background-color: white;"></canvas>
    </div>
    <center><h4>Ayo tuliskan huruf ini!</h4></center><br>
    <div class="d-flex justify-content-center">
        <img id="srcImage2" src="../../template/a.jpg" width="64" height="64">
    </div><br>
    <div class="d-flex justify-content-center">
    <a data-toggle="modal" data-target="#myModal" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/icon_about.png')}}" alt=""></a>

        <button class="btn btn-success" onclick="periksa()" style="margin-right: 10px;">Selanjutnya</button>

        <button data-toggle="modal" data-target="#myModal"  class="btn btn-success"  style="margin-right: 10px;">Se</button>
        <button class="btn btn-warning" onclick="hapus()">Hapus</button>
    </div>
    <div class="row" style="visibility: hidden;">
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
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="">
            <div >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img class="close_modal" src="{{asset('assets/icon/close_btn.png')}}" alt="">
            </div>
            <center>
            <div>
                <img class="logo" src="{{asset('assets/icon/modal_benar.png')}}" alt="">
            </div>
            <div>
                <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/tombol_modal_next.png')}}" alt=""></a>
                <a href="/ujian" onclick="btn_s()"><img class='icn' src="{{asset('assets/icon/tombol_modal_ulang.png')}}" alt=""></a>
            </div>
            </center>
            </div>

        </div>
    </div> 
</body>
<script type="text/javascript">
    var huruf = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    var salah = [];
    var input = huruf[Math.floor(Math.random() * 26)];
    var poin = 0;
    var soal = 0;
    document.getElementById("srcImage2").src = "../../template/"+input+".jpg";  

    function periksa(){
        let src = cv.imread('gambar');
        let dst = new cv.Mat();
        let dsize = new cv.Size(64,64);
        cv.resize(src, dst, dsize, 0, 0, cv.INTER_AREA);
        cv.imshow('outputCanvas', dst);
        colorImage(cv.imread('outputCanvas'), dst);
        var kanvas = document.getElementById('outputCanvas2');
        thinningImage(kanvas);
        var kanvas2 = document.getElementById('outputCanvas3');
        tepi(kanvas2);
        src = cv.imread('outputCanvas4');
        let templ = cv.imread('srcImage2');
        dst = new cv.Mat();
        let mask = new cv.Mat();
        cv.matchTemplate(src, templ, dst, cv.TM_CCORR_NORMED, mask);
        let result = cv.minMaxLoc(dst, mask); 
        console.log(result);
        if(result.maxVal>0.8){
            poin++;
            soal++;
        }
        else{
            salah.push(input);
        }
        if(soal==9){
            console.log(salah);
            var peringatan = "Nilai anda "+poin+", jawaban yang salah: ";
            for(var i =0; i<salah.length; i++){
                peringatan = peringatan + salah[i] +", ";
            }
            peringatan += "Ayo belajar lagi";
            if (confirm(peringatan)) {
              location.reload();
            } else {
              window.location.replace("/");
            }
        }

        var c = document.getElementById("gambar");
        var ctx = c.getContext("2d");
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        input = huruf[Math.floor(Math.random() * 26)];
        document.getElementById("srcImage2").src = "../../template/"+input+".jpg";
        
        src.delete(); dst.delete(); mask.delete();
    }

    function hapus(){
        var c = document.getElementById("gambar");
        var ctx = c.getContext("2d");
        ctx.clearRect(0, 0, canvas.width, canvas.height);
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
ctx.strokeStyle = "#222222";
ctx.lineWidth = 5;

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