<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/Audio-HTML5.js')}}"></script>
</head>
<body>
    <p>aaaaaaaaaaaaaaaa</p>
    <a data-toggle="modal" data-target="#myModal" onclick="btn_s()"><img class="icn" src="{{asset('assets/icon/icon_about.png')}}" alt=""></a>
                <a href="/menu" onclick="btn_s()"><img  class="icn" src="{{asset('assets/icon/tombol_modal_next.png')}}" alt=""></a>
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
            
                <a href="/ujian" onclick="btn_s()"><img class='icn' src="{{asset('assets/icon/tombol_modal_ulang.png')}}" alt=""></a>
            </div>
            </center>
            </div>

        </div>
    </div> 
</body>
</html>