<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Latihan Menulis Huruf Kecil</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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

        <div class="loader-wrapper" style="position:absolute;z-index:99;">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>

        <div>

            <a href="/menu" onclick="btn_s()"><img class="icn2" src="{{asset('assets/icon/back.png')}}" alt="" style="position:fixed;"></a>

            <div class="container-fluid" style="background :url(../assets/icon/bgnav.png);  position:fixed; z-index:-1; height:13%;"></div>
            <div class="top_right">
                <a href="#" id="btn_ubah"onclick="btn_s()"><img class=" btn_bantuan" src="{{asset('assets/icon/btn_bantuan.png')}}" alt=""></a>
                <a href="$" ><img class=" btn_bantuan" src="{{asset('assets/icon/btn_helpper.png')}}" alt=""></a>
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
            <img  id="pop_contoh" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_contoh.png')}}" alt="">
        <!-- pop up benar dan salah end -->
            <img class="papan" src="{{asset('assets/icon/papan.png')}}" alt="">
            <canvas id="gambar" width="192" height="192" style=" top :40%; position:absolute; border:2px solid #000000;z-index:2"></canvas>
            <img id="srcImage3" src="" width="190" height="190" style="z-index:1;position :absolute;top:40.5%;display:none;opacity: 0.5;">
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
                    
                            <select class="selectpicker "name="carlist" form="carform" id="masuk" onchange="inputan();ubah_contoh()">
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
            </div>
            
            <br>
            <img class="icn_anak" src="{{asset('assets/icon/anak.png')}}" alt=""></h3>
        </div>

        <center>
        <div  style="padding-top:20%">
            <a id="check" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/btn_periksa.png')}}" alt=""></a>
            <a onclick="btn_s();hapus()"><img class="icn" src="{{asset('assets/icon/btn_hapus.png')}}" alt=""></a>
            
        </div>
        </center>

        <div hidden class="row">
            <div class="col-sm-3">
                <h5>Gambar Template</h5>
                <canvas width="64" height="64" id='outputTemplate'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Template normal</h5>
                <canvas width="64" height="64" id='template_normal'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Template thinning</h5>
                <canvas width="64" height="64" id='template_thin'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Contoh</h5>
                <canvas width="64" height="64" id='outputContoh'></canvas>
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
            <div hidden class="col-sm-3">
                <h5>Gambar Tanpa Tepi</h5>
                <canvas width="64" height="64" id='outputCanvas4'></canvas>
            </div>
        </div>
        <center>
            <table hidden id="table">
                
            </table>
            <table hidden id="table2">
                
            </table>
        </center>
        <audio src="../assets/sound/touch.mp3" id="btn-s"></audio>
        <audio src="../assets/sound/benar.mp3" id="btn-benar"></audio>
        <audio src="../assets/sound/salah.mp3" id="btn-salah"></audio>
    </main>

     <!-- carousel -->
</body>

     
<script type="text/javascript">
    // loading
    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut("slow");
    });
    // loading end
    //sound click
    var sound = document.getElementById('btn-s');
    //sound benar
    var sound_b = document.getElementById('btn-benar');
    //sound salah
    var sound_s = document.getElementById('btn-salah');

    //play sound click
    function btn_s() {
        sound.pause();
        sound.currentTime = 0;
        sound.play();
    }
    //play sound salah
    function sound_salah(){
        sound_s.pause();
        sound_s.currentTime = 0;
        sound_s.play();
    }
    //play sound benar
    function sound_benar(){
        sound_b.pause();
        sound_b.currentTime = 0;
        sound_b.play();
    }
    
    //toggle contoh template
    $( document ).ready(function() {
    $("#btn_ubah").on("click",function(){
          $("#srcImage3").toggle();
        });
    }); 
    //sound click end

    // var score =0;
    var x = 0;
    var input = document.getElementById("masuk").value;
    //ambil data src gambar template
    document.getElementById("srcImage2").src = "../../template/kecil/" + input + ".jpg";
    document.getElementById("srcImage3").src = "../../template/contoh_kecil/" + input + ".jpg";
   //document.getElementById("srcImage4").src = "../../template/bw_huruf_kecil/" + input + ".jpg";
    
    //ambil template dari canvas
    var canvasTemplate = document.getElementById('outputTemplate');
    var contoh = document.getElementById('outputContoh');

    //ambil data 2d template dari canvas
    var context = canvasTemplate.getContext('2d');
    var context2 = contoh.getContext('2d');
    
    //draw template ke canvas
    draw_template();
    //draw contoh ke canvas
    draw_contoh();

    switch_threshold();

     //draw template ke canvas
    function draw_template() {
        //inisialisasi gmabar baru
        base_image = new Image();
        //ambil data src dari gambar dengan id srcImage2
        base_image.src = document.getElementById("srcImage2").src;
        //draw gambar ke canvas
        base_image.onload = function () {
            context.drawImage(base_image, 0, 0);
        }
    }

    //draw tempalte contoh ke canvas
    function draw_contoh(){
        //inisialisasi gambar baru
        base_image2 = new Image();
        //ambil data src dar gambar dengan id srcImage3
        base_image2.src = document.getElementById('srcImage3').src;
        //draw gambar ke canvas
        base_image2.onload = function(){
            context2.drawImage(base_image2, 0,0);
        }
    }

    // check kanvas kosong
    function isCanvasBlank(canvas) {
        //ambil data gambar dari canvas
        const context = canvas.getContext('2d');
        //ambil data gambar
        const pixelBuffer = new Uint32Array(
            context.getImageData(0, 0, canvas.width, canvas.height).data.buffer
        );
        //return apakah kanvas kosong atau tidak
        return !pixelBuffer.some(color => color !== 0);
    }

    //event listerner untuk btn periksa
    document.getElementById('check').addEventListener('click', function() {
        const blank = isCanvasBlank(document.getElementById('gambar'));
        //check canvas kosong atau tidak
        if(blank){
            sound_salah();
            $("#pop_kanvas").fadeIn();
            $("#pop_kanvas").fadeOut('slow');
        }else{
            //periksa();
            //check path tulisan
            pre_proses();
        }
        
    });
    function pre_proses(){
        //ambil data template dari canvas
        var kanvas_template = document.getElementById('template_normal');
        var kanvas = document.getElementById('outputCanvas2');
        //ambil data 2d template
        var ctx3 = kanvas.getContext('2d');
       //ambil data pixel array template
        var kanvasData = ctx3.getImageData(0,0,64,64);
        //proses resize
        //ambil data gambar dari canvas
        let src = cv.imread(document.getElementById("gambar"));
        //inisialisasi Mat baru
        let dst = new cv.Mat();
        //inisialisasi resolusi
        let dsize = new cv.Size(64,64);
        //resize gambar
        cv.resize(src, dst, dsize, 0, 0, cv.INTER_AREA);
        //tampilkan gambar pada canvas outputCanvas
        cv.imshow('outputCanvas', dst);
        //normalisasai warna 
        colorImage(cv.imread('outputCanvas'), dst);
        //thinning gambar
        thinningImage(kanvas); //zhen suen
        //thinningImage2(kanvas); //steinford  
        //normalisasi warna template
        colorTemplate(cv.imread('outputTemplate'),dst);
        //thinning template
        templateThinning(kanvas_template);
        check_path();

       
    }
    
    //check path tulisan pada canvas
    function check_path(){
        var i = 0;
        var j = 0;
        var k = 0;
        //ambil data gambar dari canvas
        var input_gambar = document.getElementById('outputCanvas2');
        var template = document.getElementById('outputContoh');
        //ambil data 2d gambar
        var ctx1 = input_gambar.getContext('2d');
        //ambil data 2d contoh
        var ctx2 = template.getContext('2d');

        //ambil data pixel array gambar
        var gambarData = ctx1.getImageData(0,0,64,64);
        //ambil data pixel array contoh
        var templateData = ctx2.getImageData(0,0,64,64);

        //pengecekan path
        let table = "";
        let status = true;
        //looping pixel array contoh berdasarkan tinggi
        for (let i = 0; i < templateData.height; i++) {
            table += "<tr>";
            //looping pixel array contoh berdasarkan lebar
            for (let j = 0; j < templateData.width; j++) { 
                //bagi nilai array pixel template berdasarkan rgb               
                sum = (templateData.data[i*256+j*4] + templateData.data[i*256+j*4+1] + templateData.data[i*256+j*4+2]) /3; 
                 //ubah nilai pixel dibawah 128 menjadi hitam dan diatas menjadi putih
                if(sum < 128){
                    temp1 = 0;
                }else{
                    temp1 = 1;
                }
                //bagi nilai array pixel gambar berdasarkan rgb
                sum = (gambarData.data[i*256+j*4] + gambarData.data[i*256+j*4+1] + gambarData.data[i*256+j*4+2]) /3; 
                //ubah nilai array pixel dibawah 128 menjadi hitam dan diatas menjadi putih
                if(sum < 128){
                    temp2 = 0;
                }else{
                    temp2 = 1;
                }
                if(temp1 == 1 && temp2 == 0){
                    status = false;
                }
                if(!status){
                    break;
                }
                // table += "<td> "+temp+" </td>";
                
            }
            if(!status){
                break;
            }
            // table += "</tr>";
            
        }
        //check status 
        if(status){
            //jika path benar
            periksa();
        }else{
            //jika path salah
            sound_salah();
            $("#pop_contoh").fadeIn();
            $("#pop_contoh").fadeOut('slow');
        }
        // $('#table2').append(table);
        
        // console.log(templateData);

        // for (let i = 0; i < gambarData.height; i++) {
        //     table += "<tr>";
        //     for (let j = 0; j < gambarData.width; j++) {                
        //         sum = (gambarData.data[i*256+j*4] + gambarData.data[i*256+j*4+1] + gambarData.data[i*256+j*4+2]) /3;
        //         if(sum < 128)
        //             temp = 0;
        //         else
        //             temp = 1;
        //         table += "<td> "+temp+" </td>";
                
        //     }
        //     table += "</tr>";
            
        // }
        // $('#table').append(table);
        
        // console.log(gambarData);
    }

    //periksa hasil tulisan pada canvas
    function periksa(){
        //check path
        //check_path();
        //inisialisasi nilai threshold
        var batasAtas=0; 
        var batasAtas_=0;
        //inisaslisasi nilai
        var nilai=0;
        //ambil data gambar
        var kanvas2 = document.getElementById('outputCanvas3');
        var kanvas3 = document.getElementById('outputTemplate'); 
        //ambil data 2d gambar
        var ctx = kanvas2.getContext('2d');
        //ambil data 2d template
        var ctx2 = kanvas3.getContext('2d');
        //ambil data pixel array gambar
        var imgData = ctx.getImageData(0,0,64,64);
        //ablil data pixel array template
        templateData = ctx2.getImageData(0,0,64,64);
        //template_thinData = ctx3.getImageData(0,0,64,64);
 
        //looping array pixel gambar
        for(var i = 0; i<imgData.data.length; i+=4){
            //pemberian threshold
            if(templateData.data[i]==0){
                // batasAtas++;
               //batasAtas = 64*64;
                batasAtas =  batasAtas + (1-Math.round((templateData.data[i]/255)));
                batasAtas_ = Math.round(batasAtas*x);
                //threshold = threshold + (Math.round(batasAtas*20/100));
            }
            //template matching
            //nilai = nilai + Math.pow(((1-Math.round(contohData.data[i]/255)) - (1-Math.round(imgData.data[i]/255))),2); //tm_sqdiff
            nilai = nilai + (1-Math.round(templateData.data[i]/255)) * (1-Math.round(imgData.data[i]/255)); //TM_CCORR
        }

        //console.log(batasAtas);
        console.log(batasAtas_);
        console.log(nilai);
        //if(nilai>=(batasAtas*80/100)){
        //kondisi benar dan salah
        if(nilai>=batasAtas_){
            sound_benar();
            $("#pop_benar").fadeIn();
            $("#pop_benar").fadeOut('slow');
        }
        else{
            sound_salah();
            $("#pop_salah").fadeIn();
            $("#pop_salah").fadeOut('slow');
        }
          
	}

    //mengubah tempalte
    function inputan(){
        input = document.getElementById("masuk").value; 
        document.getElementById("srcImage2").src = "../../template/kecil/"+input+".jpg"; //ambil data src template
        var c = document.getElementById("gambar");c.width = c.width; //hapus gambar di canvas
        draw_template(); //draw template ke canvas
        switch_threshold();
    }
    //mengubah template contoh
    function ubah_contoh(){
        input = document.getElementById("masuk").value;
        document.getElementById('srcImage3').src="../../template/contoh_kecil/"+input+".jpg";
        draw_contoh(); //draw template ke canvas
    }
    //hapus gambar
    function hapus(){
        var c = document.getElementById("gambar");c.width = c.width;
        // var ctx = c.getContext("2d");
        // ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    function switch_threshold (){
        input = document.getElementById("masuk").value;
        switch(input){
            case "a" :
            case "c" :
            case "d" :
            case "o" :
            case "q" :
            case "x" :
            case "z" :
            case "e" :
                x = 30/100;
                break;
            case "s" :
            case "t" :
            case "v" :
            case "y" :
                x = 25/100;
                break;
            case "p" :
                x = 22
                break;
            case "f" :
            case "g" :
            case "h" :
            case "k" :
            case "u" :
            case "r" :
                x = 20/100;
                break;
            case "l" :
            case "m" :
            case "n" :
                x = 18/100;
                break;
            case "b" :
                x = 15/100;
                break;
            default :
            x = 30/100;
            break;
        }
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