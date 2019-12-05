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
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body class="bg3">
    
    <div class="d-flex justify-content-center">
        <!-- <button class="btn btn-primary" onclick="window.location.href = '/';">Menu</button> -->
        
        <a href="/menu" onclick="play()"><img  class="icn2" src="{{asset('assets/icon/back.png')}}" alt=""></a>
        <br><img class="icn" src="{{asset('assets/icon/icon_latihan.png')}}" alt=""></h3>
    </div>
    <div class="d-flex justify-content-center">
    <img class="papan" src="{{asset('assets/icon/papan.png')}}" alt="">
      <canvas id="gambar" width="320" height="320" style="background : rgba(255, 255, 255, 0.1) outline : black 3px  solid
  border-color: white"></canvas>
     
        
    </div>
    <center><h4>Ayo tuliskan huruf ini!</h4></center>
      <div class="d-flex justify-content-center">
        <select name="carlist" form="carform" id="masuk" onchange="inputan()">
          <option value="#" selected>#</option>
          <option value="a">A</option>
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
    </div><br>
    <div class="d-flex justify-content-center">
        <img id="srcImage2" src="../../template/a.jpg" width="64" height="64">
    </div><br>
    <div class="d-flex justify-content-center">
    <a  onclick="periksa()"><img  class="icn" src="{{asset('assets/icon/icon_periksa.png')}}" alt=""></a>
    <a  onclick="hapus()"><img  class="icn" src="{{asset('assets/icon/icon_hapus.png')}}" alt=""></a>
    
        <!-- <button class="btn-periksa" onclick="periksa()" style="margin-right: 10px;">Periksa</button>
        <button class="btn btn-warning" onclick="hapus()">Hapus</button> -->
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
</body>
<script type="text/javascript">
    var input = document.getElementById("masuk").value;
    document.getElementById("srcImage2").src = "../../template/"+input+".jpg";  

    var canvasTemplate = document.getElementById('outputTemplate');	
    var context = canvasTemplate.getContext('2d');

    make_base();

  function make_base()
	{
	  base_image = new Image();
	  base_image.src = document.getElementById("srcImage2").src;
	  base_image.onload = function(){
	    context.drawImage(base_image, 0, 0);
	  }
	}

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
     
    templateData = context.getImageData(0,0,64,64);

    //template matching
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
      // threshold
    if(nilai<=(batasAtas*15/100)){
        alert("Jawaban Benar");
    }
    else{
        alert("Jawaban Salah");
    }
        src.delete(); dst.delete();
	}

    function inputan(){
        input = document.getElementById("masuk").value;
        document.getElementById("srcImage2").src = "../../template/"+input+".jpg";
        var c = document.getElementById("gambar");c.width = c.width;
        make_base();
    }

    function hapus(){
        var c = document.getElementById("gambar");c.width = c.width;
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