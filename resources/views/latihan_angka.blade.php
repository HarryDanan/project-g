<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Latihan Menulis Angka</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script> -->
    <script src="{{asset('js/imageProcessing/preProcessing.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/imageProcessing/addon.js')}}" type="text/javascript"></script>
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
                <a href="#" id="btn_ubah"onclick=""><img class=" btn_bantuan" src="{{asset('assets/icon/btn_bantuan.png')}}" alt=""></a>
                <a href="#" onclick="" ><img class=" btn_bantuan" src="{{asset('assets/icon/btn_helpper.png')}}" alt=""></a>
            </div>     
            <div>
                <center>
                    <img class="icn_logo" src="{{asset('assets/icon/logo_h_b.png')}}" alt=""></h3>
                </center>
            </div>
        </div>
        <div style="position:relative">
            <div class="grp_pop_up">
                <img  id="pop_benar" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_benar.png')}}" alt="">
                <img  id="pop_salah" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_salah.png')}}" alt="">
                <img  id="pop_kanvas" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_kanvas.png')}}" alt="">
                <img  id="pop_contoh" style="display:none; position:fixed" class="pop_bs" src="{{asset('assets/icon/pop_contoh.png')}}" alt="">
            </div>
        </div>
    
        <div class="d-flex justify-content-center">
            <img class="papan" src="{{asset('assets/icon/papan.png')}}" alt="">
            <canvas class="kanvas_template" id="gambar" width="192" height="192"></canvas>
            <img class="kanvas_contoh" id="srcImage3" src="" width="190" height="190">
        </div>
        <br><br>
        
        <div >
            <div>
                <img class="bubble" src="{{asset('assets/icon/bubble.png')}}" alt="">
                    <img class="icn_ayo" src="{{asset('assets/icon/ayo.png')}}" alt=""><br>
                    <div class="isi_bubble">
                        <center>
                        <div>
                            <img id="srcImage2" class="papan_template">
                        </div>
                    
                            <select class="selectpicker "name="carlist" form="carform" id="masuk" onchange="inputan();ubah_contoh()">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </center>
                        </div>
            </div>
            
            <br>
            
        </div>
        <div>
            <img class="icn_anak" src="{{asset('assets/icon/anak.png')}}" alt=""></h3>
        </div>
        

        <center>
        <div  class = "grp_periksa">
            <a id="check" onclick="btn_s();check_kanvas()"><img class="icn" src="{{asset('assets/icon/btn_periksa.png')}}" alt=""></a>
            <a onclick="btn_s();hapus()"><img class="icn" src="{{asset('assets/icon/btn_hapus.png')}}" alt=""></a>
            
        </div>
        </center>

        <div hidden class="row">
            <div class="col-sm-3">
                <h5>Gambar Template</h5>
                <canvas width="64" height="64" id='outputTemplate'></canvas>
            </div>
            <div hidden class="col-sm-3">
                <h5>Gambar Template normal</h5>
                <canvas width="64" height="64" id='template_normal'></canvas>
            </div>
            <div hidden class="col-sm-3">
                <h5>Gambar Template thinning</h5>
                <canvas width="64" height="64" id='template_thin'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Contoh</h5>
                <canvas width="64" height="64" id='outputContoh'></canvas>
            </div>
            <div hidden class="col-sm-3">
                <h5>Gambar Resize</h5>
                <canvas width="64" height="64" id='outputCanvas'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Black And White</h5>
                <canvas width="64" height="64" id='outputCanvas2'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Tanpa Tepi</h5>
                <canvas width="64" height="64" id='outputCanvas4'></canvas>
            </div>
            <div class="col-sm-3">
                <h5>Gambar Skletoning</h5>
                <canvas width="64" height="64" id='outputCanvas3'></canvas>
            </div>
            <div hidden class="col-sm-3">
                <h5>Gambar Skletoning2</h5>
                <canvas width="64" height="64" id='outputKhusus'></canvas>
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
    document.getElementById("srcImage2").src = "../../template/angka/" + input + ".jpg";
    document.getElementById("srcImage3").src = "../../template/contoh_angka/" + input + ".jpg";
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
    // document.getElementById('check').addEventListener('click', function() {
    function check_kanvas() {
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
        
    }
    function pre_proses(){
        //ambil data template dari canvas
        var kanvas_template = document.getElementById('template_normal');
        var kanvas = document.getElementById('outputCanvas2');
        var kanvas2 = document.getElementById('outputCanvas2');
        var kanvas3 = document.getElementById('outputCanvas4');

        var ctx = kanvas2.getContext('2d');
        var blobKanvas = ctx.getImageData(0,0,64,64);
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
        //thinningImage(kanvas); //zhen suen
        //thinningImage2(kanvas); //steinford  
        tepi(kanvas2);
        thinningImage(kanvas3);
        thinning_khusus(kanvas2);
        //thinningTemplate(kanvas3);
        //normalisasi warna template
        colorTemplate(cv.imread('outputTemplate'),dst);
        //thinning template
        templateThinning2(kanvas_template);
        //templateThinning2(kanvas3);
        //FindBlobs(blobKanvas);
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
        //inisialisasi nilai threshold
        var batasAtas=0; 
        var threshold_error=0;
        var threshold_pixel = 0;
        var threshold_pixel2 = 0;
        var threshold_pixel_khusus =0;
        //inisaslisasi nilai
        var nilai=0;
        var status=0;
        var char= document.getElementById('masuk').value;
        //ambil data gambar
        var kanvas2 = document.getElementById('outputCanvas3');
        var kanvas3 = document.getElementById('outputTemplate'); 
        var kanvas4 = document.getElementById('outputCanvas4');
        var check_char = document.getElementById('outputKhusus');
        var check_khusus = document.getElementById('outputCanvas2');
        //var kanvas4 = document.getElementById('template_thin');
        
        //ambil data 2d gambar
        var ctx = kanvas2.getContext('2d');
        var ctx2 = kanvas3.getContext('2d');
        var ctx3 = kanvas4.getContext('2d');
        var ctx_char = check_char.getContext('2d');
        var ctx_khusus = check_khusus.getContext('2d');
        //ambil data pixel array gambar
        var imgData = ctx.getImageData(0,0,64,64);
        var templateData = ctx2.getImageData(0,0,64,64);
        var canvas2 = ctx_char.getImageData(0,0,64,64);
        var canvas4 = ctx3.getImageData(0,0,64,64);
        var khusus = ctx_khusus.getImageData(0,0,64,64);
        //template_thinData = ctx3.getImageData(0,0,64,64);
        //countBlob();
        for (var i=0; i<canvas4.data.length; i+=4){
            if(canvas4.data[i]==0){
                threshold_pixel = threshold_pixel + (1-Math.round((canvas4.data[i]/255)));
            }
            if(canvas2.data[i]==0){
                threshold_pixel2 = threshold_pixel2 + (1-Math.round((canvas2.data[i]/255)));
            }
            if(khusus.data[i]==0){
                threshold_pixel_khusus = threshold_pixel_khusus + (1-Math.round((khusus.data[i]/255)));
            }
            if(char=="3"){
                if(threshold_pixel2<=150){
                    status=1;
                }else{
                    status=0;
                }
            }else if(char=="5"){
                if(threshold_pixel2<=150){
                    status=1;
                }else{
                    status=0;
                }
            }else if(char=="7"){
                if(threshold_pixel2<=100){
                    status=1;
                }else{
                    status=0;
                }
            }else if(char=="8"){
                if(threshold_pixel2<=180){
                    status=1;
                }else{
                    status=0;
                }
            }
            else if(char=="9"){
                if(threshold_pixel2<=180){
                    status=1;
                }else{
                    status=0;
                }
            }
            else if(char=="1"){
                if(threshold_pixel_khusus<=180){
                    status=1;
                }else{
                    status=0;
                }
            }
            else{
                status=0;
            }
            if(threshold_pixel>=900){
                status=1;
            }
        }
        //looping array pixel gambar
        for(var i = 0; i<imgData.data.length; i+=4){
            //pemberian threshold_error
            if(templateData.data[i]==0){
                batasAtas =  batasAtas + (1-Math.round((templateData.data[i]/255)));
                threshold_error = Math.round(batasAtas*x);
            }
            if(status!=1){
                //template matching
                //nilai = nilai + Math.pow(((1-Math.round(templateData.data[i]/255)) - (1-Math.round(imgData.data[i]/255))),2); //tm_sqdiff
                nilai = nilai + (1-Math.round(templateData.data[i]/255)) * (1-Math.round(imgData.data[i]/255)); //TM_CCORR
            }
                
        }
   
        //console.log(char);
        //console.log(status);
        //console.log(status_khusus);
        //console.log(threshold_pixel_khusus);
        //console.log(threshold_pixel2);
        //console.log(threshold_pixel);
        //console.log(batasAtas);
        console.log(threshold_error);
        console.log(nilai);

        //kondisi benar dan salah
        if(status!=1){
            if(nilai>=threshold_error){
                sound_benar();
                $("#pop_benar").fadeIn();
                $("#pop_benar").fadeOut('slow');
            }
            else{
                sound_salah();
                $("#pop_salah").fadeIn();
                $("#pop_salah").fadeOut('slow');
            }
            status=0;
        }else{
            sound_salah();
            $("#pop_salah").fadeIn();
            $("#pop_salah").fadeOut('slow');
        }
     
        //download();
          
    }
    function download(){
        var download = document.getElementById("download");
        var image = document.getElementById("outputCanvas3").toDataURL("image/png")
            .replace("image/png", "image/octet-stream");
        download.setAttribute("href", image);
//download.setAttribute("download","archive.png");
    }

    //mengubah tempalte
    function inputan(){
        input = document.getElementById("masuk").value; 
        document.getElementById("srcImage2").src = "../../template/angka/"+input+".jpg"; //ambil data src template
        var c = document.getElementById("gambar");c.width = c.width; //hapus gambar di canvas
        var d = document.getElementById("outputTemplate");d.width = d.width; //hapus gambar di canvas
        var e = document.getElementById("outputContoh");e.width = e.width; //hapus gambar di canvas
        var f = document.getElementById("outputCanvas");f.width = f.width; //hapus gambar di canvas
        var g = document.getElementById("outputCanvas2");g.width = g.width; //hapus gambar di canvas
        var h = document.getElementById("outputCanvas3");h.width = h.width; //hapus gambar di canvas
        var i = document.getElementById("outputCanvas4");i.width = i.width; //hapus gambar di canvas
        draw_template(); //draw template ke canvas
        switch_threshold();
    }
    //mengubah template contoh
    function ubah_contoh(){
        input = document.getElementById("masuk").value;
        document.getElementById('srcImage3').src="../../template/contoh_angka/"+input+".jpg";
        draw_contoh(); //draw template ke canvas
    }
    //hapus gambar
    function hapus(){
        var c = document.getElementById("gambar");c.width = c.width;
        var d = document.getElementById("outputCanvas");d.width = d.width;
        var e = document.getElementById("outputCanvas2");e.width = e.width;
        var f = document.getElementById("outputCanvas3");f.width = f.width;
        var g = document.getElementById("outputCanvas4");g.width = g.width;
        // var ctx = c.getContext("2d");
        // ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    function switch_threshold (){
        input = document.getElementById("masuk").value;
        switch(input){
            case "3" :
                x = 44/100;
                break;
            case "6" :
            case "5" :
            case "9" :
                x = 40/100;
                break;
            case "8" :
            case "0" :
                x = 36/100;
                break;
                // x = 35/100;
                // break;
            case "2" :
                x = 35/100;
                break;
            case "4" :
                x = 30/100;
                break;
            case "3" :
                x = 25/100;
                break;
            case "1" :
                x = 19/100;
                break;
            case "7" :
                x = 18/100;
                break;
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