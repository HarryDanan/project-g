<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Ayo Menulis</title>

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

        <div class="loader-wrapper" style="position:absolute;z-index:4;">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>

        <div>

            <a href="/menu_ujian" onclick="btn_s()"><img class="icn2" src="{{asset('assets/icon/back.png')}}" alt="" style="position:fixed;"></a>

            <div class="container-fluid" style="background :url(../assets/icon/bgnav.png);  position:fixed; z-index:-1; height:13%;"></div>     
            
            <div class="menua">
                <a href="" class ="score" id="livecount" style=""></a>
                <a href="" class ="score" id="score" style=""></a>
                {{-- <a href="" class ="score" id="countdown" style=""></a> --}}
                <a href="" class ="score" id="time">05:00</a>

                <a href="" ><img class=" icn_darah" src="{{asset('assets/icon/darah.png')}}" alt=""></a>
                <a href="" ><img class=" icn_sw" src="{{asset('assets/icon/icon_skor.png')}}" alt=""></a>
                <a href="" ><img class=" icn_sw" src="{{asset('assets/icon/icon_waktu.png')}}" alt=""></a>
            </div>
            <!-- <div class="top_right">
                <a href="#" id="btn_ubah"onclick="btn_s()"><img class=" btn_bantuan" src="{{asset('assets/icon/btn_bantuan.png')}}" alt=""></a>
                <a href="$" ><img class=" btn_bantuan" src="{{asset('assets/icon/btn_helpper.png')}}" alt=""></a>
            </div>     -->
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
            <canvas class="kanvas_template"id="gambar" width="192" height="192" ></canvas>
            <img class="kanvas_contoh"id="srcImage3" src="" width="190" height="190" >
        </div>
        <br><br>

        <div >
            <div>
                <img class="bubble" src="{{asset('assets/icon/bubble.png')}}" alt="">
                    <img class="icn_ayo" src="{{asset('assets/icon/ayo.png')}}" alt=""><br>
                    <div class="isi_bubble">
                        <center>
                        <div>
                            <img class="papan_template" id="srcImage2" src="" style="padding-bottom:35%">
                        </div>
                        </center>
                    </div>
            </div>
            
            <br>

        </div>
        <div>
            <img class="icn_anak" src="{{asset('assets/icon/anak.png')}}" alt=""></h3>
        </div>

        <center>
        <div class="grp_periksa">
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

    <!-- Modal waktu -->
    <div id="myModal_waktu" class="modal fade" role="dialog">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="container">
                    <img class="about_modal" style="width:100%;height:100%;" src="{{asset('assets/icon/waktu_habis_popup.png')}}" alt="">
                    
                </div>
                <div class="container" style="text-align:center">
                     <a href="/menu" onclick="btn_s()" data-target="#myModal_skor" data-toggle="modal" data-dismiss="modal" ><img  class="btn_pop_up" src="{{asset('assets/icon/btn_lihat_skor.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div> 

        <!-- modal skor -->
        <div id="myModal_skor" class="modal fade" role="dialog" >
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <!-- Modal content-->
                <div class="modal-content">
                    <!-- <div class="container">
                        <img onclick="btn_s()"class="close_modal" src="{{asset('assets/icon/close_btn.png')}}" data-dismiss="modal" alt="">&times;</img>
                    </div> -->
                    <div style="position:relative;">
                        <div class="input_skor">
                        <div id="display"></div>
                            <form  action="/score/store" method="post" id="form-skor">
                                {{ csrf_field() }}
                                <h1 class='skorbox' id='skorbox'></h1>
                                <input class="form-control" type="text" name="nilai"id="scoreinput" disabled hidden><br>
                                <input class="form-control" type="text" name="tipe"id="tipe" value="Huruf Besar" disabled hidden><br>
                                <input class="form-control" type="text" name="nama" style="text-align:center;"placeholder="Nama"><br>
                            </form>
                        </div>
                        <img class="skor_modal"  src="{{asset('assets/icon/skor_modal.png')}}" alt="">
                    </div>
                    <div class="grp_btn_skor" style="padding-left:10%;">
                        <a href="/ujian_besar" id="submit" onclick="btn_s()"><img class="btn_pop_up" src="{{asset('assets/icon/btn_ulang.png')}}" alt=""></a>
                        <a href="/menu_ujian" onclick="btn_s()"><img class="btn_pop_up" src="{{asset('assets/icon/btn_keluar.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal carousel -->

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div id="demo" class="carousel slide" data-interval="false" data-ride="carousel">
        
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <center>
                    <!-- The slideshow -->
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/icon/back.png')}}" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/icon/back.png')}}" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/icon/back.png')}}" alt="New York"><br>
                            <a href="/latihan" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/btn_mulai.png')}}" alt=""></a>
                        </div>
                        </div>
        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <img style="width:25%;" src="{{asset('assets/icon/btn_back.png')}}">
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                        <img style="width:25%;"src="{{asset('assets/icon/btn_next.png')}}">
                        </a>
                    </center>
                    </div>
                </div>
                </div>
            </div>
    
        
</body>

     
<script type="text/javascript">
    // loading

    $(window).on("load", function () {
        $(".loader-wrapper").fadeOut("slow");
    });

    $( document ).ready(function() {
    $("#btn_ubah").on("click",function(){
          $("#srcImage3").toggle();
        });
    }); 

    // loading end
    // sound

    var sound = document.getElementById('btn-s');
    var sound_b = document.getElementById('btn-benar');
    var sound_s = document.getElementById('btn-salah');
    document.getElementById("tipe").value = "Huruf Besar";

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
    // var input = document.getElementById("masuk").value;
    var huruf = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    var input = huruf[Math.floor(Math.random() * 26)];
    var soal = 0;
    var timeLeft = 120; //setting timer
    var liveleft = 3; //setting jumlah nyawa
    var point = 0; //skor
    var x =0;

    document.getElementById("srcImage2").src = "../../template/besar/" + input + ".jpg";
    document.getElementById("srcImage3").src = "../../template/contoh_besar/" + input + ".jpg";

    var canvasTemplate = document.getElementById('outputTemplate');
    var contoh = document.getElementById('outputContoh');

    var context = canvasTemplate.getContext('2d');
    var context2 = contoh.getContext('2d');

    draw_template();
    draw_contoh();
    switch_threshold();

    function draw_template() { //membuat inputgambar template
        base_image = new Image();
        base_image.src = document.getElementById("srcImage2").src;
    
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
        }else{
            pre_proses();
        }
        
    });
    function pre_proses(){
        //ambil data template dari canvas
        var kanvas_template = document.getElementById('template_normal');
        var kanvas = document.getElementById('outputCanvas2');
        var kanvas2 = document.getElementById('outputCanvas2');
        var kanvas3 = document.getElementById('outputCanvas4');

        //ambil data 2d template
        var ctx = kanvas2.getContext('2d');
        var blobKanvas = ctx.getImageData(0,0,64,64);
       //ambil data pixel array template
        //var kanvasData = ctx3.getImageData(0,0,64,64);
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
        tepi(kanvas2);
        thinningImage(kanvas3);
        thinning_khusus(kanvas2);
        //thinningImage2(kanvas); //steinford  
        //normalisasi warna template
        colorTemplate(cv.imread('outputTemplate'),dst);
        //thinning template
        templateThinning2(kanvas_template);
        check_path();
   
    }

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


    // check end
    // periksa
    function periksa(){
   
    var batasAtas=0; 
    var threshold_error=0;
    var threshold_pixel = 0;
    var threshold_pixel2 = 0;
    var threshold_pixel_khusus = 0;
    var status_khusus =0;
    var nilai=0;
    var status=0;
    //var char= document.getElementById('masuk').value;
 

    var kanvas2 = document.getElementById('outputCanvas3');
    var kanvas3 = document.getElementById('outputTemplate');
    var kanvas4 = document.getElementById('outputCanvas4');
    var check_char = document.getElementById('outputKhusus');
    var check_khusus = document.getElementById('outputCanvas2'); 


    var ctx = kanvas2.getContext('2d');
    var ctx2 = kanvas3.getContext('2d');
    var ctx3 = kanvas4.getContext('2d');
    var ctx_char = check_char.getContext('2d');
    var ctx_khusus = check_khusus.getContext('2d');
    
    var imgData = ctx.getImageData(0,0,64,64);
    var templateData = ctx2.getImageData(0,0,64,64);
    var canvas2 = ctx_char.getImageData(0,0,64,64);
    var canvas4 = ctx3.getImageData(0,0,64,64);
    var khusus = ctx_khusus.getImageData(0,0,64,64);

    
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
            if(input=="u"){
                if(threshold_pixel2<=100){
                    status=1;
                }else if (threshold_pixel>=900){
                    status=1;
                }else{
                    status=0;
                }
            }else if(input=="t"){
                if(threshold_pixel2<=70){
                    status=1;
                }else{
                    status=0;
                }
            }else if(input=="p"){
                if(threshold_pixel2<=150){
                    status=1;
                }else{
                    status=0;
                }
            }else if(input=="r"){
                if(threshold_pixel2<=150){
                    status=1;
                }else{
                    status=0;
                }
            }else if(input=="n"){
                if(threshold_pixel2<=140){
                    status=1;
                }else{
                    status=0;
                }
            }else if(input=="k"){
                if(threshold_pixel2<=140){
                    status=1;
                }else{
                    status=0;
                }
            }
            else if(input=="i"){
                status_khusus=1;
                if(threshold_pixel_khusus<=100){
                    status=1;
                }else{
                    status=0;
                }
            }
            else if(input=="h"){
                if(threshold_pixel2<=120){
                    status=1;
                }else{
                    status=0;
                }
            }
            else if(input=="a"){
                if(threshold_pixel2<=120){
                    status=1;
                }else{
                    status=0;
                }
            }
            else if(input=="j"){
                status_khusus=1;
                if(threshold_pixel_khusus<=150){
                    status=1;
                }else{
                    status=0;
                }
            } 
            else{
                status=0;
            }
            if(input!=="i"){
                if(threshold_pixel>=900){
                    status=1;
                }
            }
        }
        //looping array pixel gambar
        for(var i = 0; i<imgData.data.length; i+=4){
            //pemberian threshold
            if(templateData.data[i]==0){
                batasAtas =  batasAtas + (1-Math.round((templateData.data[i]/255)));
                threshold_error = Math.round(batasAtas*x);
            }
            if(status!=1 && status_khusus!=1){
                //template matching
                //nilai = nilai + Math.pow(((1-Math.round(templateData.data[i]/255)) - (1-Math.round(imgData.data[i]/255))),2); //tm_sqdiff
                nilai = nilai + (1-Math.round(templateData.data[i]/255)) * (1-Math.round(imgData.data[i]/255)); //TM_CCORR
            }else if(status!=1 && status_khusus==1){
                nilai = nilai + (1-Math.round(templateData.data[i]/255)) * (1-Math.round(canvas2.data[i]/255)); //TM_CCORR
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

    //if(nilai>=(batasAtas*80/100)){
    if(status!=1){
        if(nilai>=threshold_error){
            sound_benar();
            point=point+10;
            soal++;
            document.getElementById("scoreinput").value = point;
            $("#pop_benar").fadeIn();
            $("#pop_benar").fadeOut('slow');
            hapus();
        }
        else{
            sound_salah();
            liveleft--;
            // alert("Salah");
            $("#pop_salah").fadeIn();
            $("#pop_salah").fadeOut('slow');
            hapus();
        }
        status=0;
        status_khusus=0;
    }else{
        sound_salah();
        liveleft--;
        // alert("Salah");
        $("#pop_salah").fadeIn();
        $("#pop_salah").fadeOut('slow');       
    }
    if(soal==10){
        $('#myModal_skor').modal({backdrop: 'static', keyboard: false})  
        $("#myModal_skor").modal('show');
    }
        input = huruf[Math.floor(Math.random() * 26)];
        document.getElementById("srcImage2").src = "../../template/besar/"+input+".jpg";
        draw_template();
        document.getElementById("srcImage3").src = "../../template/contoh_besar/"+input+".jpg";
        draw_contoh();
        switch_threshold();
	}

    function switch_threshold (){
        //input = document.getElementById("masuk").value;
        switch(input){
    
            case "z" :
                x = 48/100;
                break;
            case "d" :
                x = 46/100;
                break;
            case "c" :
            case "q" :
                x = 45/100;
                break;
            case "w" :
                x = 43.9/100;
                break;
            case "a" :
            case "x" :
            case "g" :
            case "m" :
                x = 40/100;
                break;
            case "s" :
                x = 38/100;
                break;
            case "e" :
                x = 36/100;
                break;
                // x = 35/100;
                // break;
            case "b" :
                x = 34/100;
                break;
            case "p" :
                x = 33/100;
                break;
            case "r" :
                x = 32.5/100;
                break;
            case "n" :
                x = 31/100;
                break;
            case "o" :
            case "f" :
                x = 30/100;
                break;
            case "v" :
            case "u" :
                 x = 26/100;
                break;
                // x = 25/100;
                // break;
            case "k" :
                x  = 23/100;
                break;
            case "y" :
            case "h" :
                x = 22/100;
                break;
            case "t" :
                x = 21/100;
                break;
            case "i" :
                x = 19/100;
                break;
            case "l" :
                x = 16/100;
                break;
            case "j" :
                x = 4/100;
                break;
            default :
            x = 30/100;
            break;
        }
    }
  
    // periksa

    //darah 
    var liveelem = document.getElementById('livecount');
    var liveid = setInterval(livecount, 0);

    function livecount() {
        if (liveleft == 0) {
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
    // var elem = document.getElementById('countdown');
    // var timerId = setInterval(countdown, 10);
    // function countdown() {
    //     if (timeLeft == -1) {
    //         clearTimeout(timerId);
    //         // alert("Waktu Habis");
    //         // call_modal_waktu();
    //         $('#myModal_waktu').modal({backdrop: 'static', keyboard: false})  
    //         $("#myModal_waktu").modal('show');
            
    //     } else {
    //         elem.innerHTML = timeLeft;
    //         timeLeft--;
    //     }
    // }

    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if(timer!=0){
        	    --timer;
            }else{
                clearTimeout(timer);
                $('#myModal_waktu').modal({backdrop: 'static', keyboard: false})  
                $("#myModal_waktu").modal('show');
            }
        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 60 * 5,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };


    //score 
    var selem = document.getElementById('score');
    var scoreid = setInterval(score, 0);
    function score(){
        selem.innerHTML = point;
    }

    function hapus(){
        var c = document.getElementById("gambar");c.width = c.width;
        var d = document.getElementById("outputCanvas");d.width = d.width;
        var e = document.getElementById("outputCanvas2");e.width = e.width;
        var f = document.getElementById("outputCanvas3");f.width = f.width;
        var g = document.getElementById("outputCanvas4");g.width = g.width;
        // var ctx = c.getContext("2d");
        // ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    
    $('#myModal_skor').on('shown.bs.modal', function (e) {
        display_skor();
    })
    function display_skor() {
        document.getElementById('skorbox').innerHTML = point;
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