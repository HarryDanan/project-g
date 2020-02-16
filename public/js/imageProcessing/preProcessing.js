//normalisasi rgb
function colorImage(src,dst){
	//ubah warna gamba rke hitam putih
	let low = new cv.Mat(src.rows, src.cols, src.type(), [0,0,0,255]); //parameter bahwa
    let high = new cv.Mat(src.rows, src.cols, src.type(), [0,0,0,255]); //paramter atas
    
    cv.inRange(src, low, high, dst); //mengecek apakah nilai array berada diantara paramter bawah dan atas

	cv.imshow('outputCanvas2', dst); //tampilkan gambar pada canvas dengan id outputCanvas2
	//
	//invert warna gambar putih hitam
    var kanvas = document.getElementById('outputCanvas2'); //inisialisasi kanvas
	var ctx = kanvas.getContext('2d'); //ambil data render 2d kanvas
	var imgData = ctx.getImageData(0,0,64,64); //ambil data pixel gambar
	//looping untuk invert pixel gambar
	for(var i = 0; i<imgData.data.length; i+=4){
		imgData.data[i] =  255-imgData.data[i];//red channel
	 	imgData.data[i+1] = 255-imgData.data[i+1]; //green channel
	 	imgData.data[i+2] = 255-imgData.data[i+2]; //blue channel
	 	imgData.data[i+3] = 255; //aplha channel
	}
	//ctx.clearRect(left, top, width, height);
	ctx.putImageData(imgData,0,0); //render gambar ke kanvas

	//hapus parameer
    //low.delete(); high.delete();src.delete(); dst.delete();
}
//normalisasi rgb
function colorTemplate(src,dst){
	//ubah warna gamba rke hitam putih
	let low = new cv.Mat(src.rows, src.cols, src.type(), [0,0,0,255]); //parameter bahwa
    let high = new cv.Mat(src.rows, src.cols, src.type(), [0,0,0,255]); //paramter atas
    
    cv.inRange(src, low, high, dst); //mengecek apakah nilai array berada diantara paramter bawah dan atas

	cv.imshow('template_normal', dst); //tampilkan gambar pada canvas dengan id template_normal
	//
	//invert warna gambar putih hitam
    var kanvas = document.getElementById('template_normal'); //inisialisasi kanvas
	var ctx = kanvas.getContext('2d'); //ambil data render 2d kanvas
	var imgData = ctx.getImageData(0,0,64,64); //ambil data pixel gambar
	//looping untuk invert pixel gambar
	for(var i = 0; i<imgData.data.length; i+=4){
		imgData.data[i] =  255-imgData.data[i];//red channel
	 	imgData.data[i+1] = 255-imgData.data[i+1]; //green channel
	 	imgData.data[i+2] = 255-imgData.data[i+2]; //blue channel
	 	imgData.data[i+3] = 255; //aplha channel
	}
	//ctx.clearRect(left, top, width, height);
	//render gambar ke kanvas
	ctx.putImageData(imgData,0,0);

	//hapus parameer
    low.delete(); high.delete();src.delete(); dst.delete();
}

// thinning zhen suen
var berhenti = 0;
function thinningImage(kanvas){
	//get image data
	var ctx = kanvas.getContext('2d'); //membuat object CanvasRenderingContext2D
	var imgData = ctx.getImageData(0,0,64,64); //mengambil data pixel kanvas dengan ukuran 64 * 64
	//operation	
	var gambar = zeros([64,64]); //inisialiasi matriks 64 * 64 kosong
	//inisialisasi matriks
	var j = 0;
	var k = 0;
	var l = 0;
	//mengubah array pixel gambar menjadi matriks
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	gambar[k][j] = imgData.data[i];
	 	j=j+1;
	 	l=l+1;
	}
	//proses thinning 
	while(berhenti!=1){
		var gambar = step1(gambar);
		var gambar = step2(gambar);
	}
	berhenti=0;

	//change image
	// inisialisasi variable
	var j = 0;
	var k = 0;
	var l = 0;
	//mengubah array pixel menjadi matriks
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
		 }
		//mengubah data matriks gambar agar sesuai dengan hasil thinning
	 	imgData.data[i] = gambar[k][j];
	 	imgData.data[i+1] = gambar[k][j];
	 	imgData.data[i+2] = gambar[k][j];
	 	j=j+1;
	 	l=l+1;
	}

	//show image 
	var kanvas3 = document.getElementById('outputCanvas3'); //inisialisasi kanvas
	var ctx3 = kanvas3.getContext('2d'); //membuat object CanvasRenderingContext2D
	ctx3.putImageData(imgData,0,0); //tampilkan gambar pada kanvas
}

function templateThinning(kanvas){
	//get image data
	var ctx = kanvas.getContext('2d'); //membuat object CanvasRenderingContext2D
	var imgData = ctx.getImageData(0,0,64,64); //mengambil data pixel kanvas dengan ukuran 64 * 64
	//operation	
	var gambar = zeros([64,64]); //inisialiasi matriks 64 * 64 kosong
	//inisialisasi matriks
	var j = 0;
	var k = 0;
	var l = 0;
	//mengubah array pixel gambar menjadi matriks
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	gambar[k][j] = imgData.data[i];
	 	j=j+1;
	 	l=l+1;
	}
	//proses thinning 
	while(berhenti!=1){
		var gambar = step1(gambar);
		var gambar = step2(gambar);
	}
	berhenti=0;

	//change image
	// inisialisasi variable
	var j = 0;
	var k = 0;
	var l = 0;
	//mengubah array pixel menjadi matriks
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
		 }
		//mengubah data matriks gambar agar sesuai dengan hasil thinning
	 	imgData.data[i] = gambar[k][j];
	 	imgData.data[i+1] = gambar[k][j];
	 	imgData.data[i+2] = gambar[k][j];
	 	j=j+1;
	 	l=l+1;
	}

	//show image 
	var kanvas3 = document.getElementById('template_thin'); //inisialisasi kanvas
	var ctx3 = kanvas3.getContext('2d'); //membuat object CanvasRenderingContext2D
	ctx3.putImageData(imgData,0,0); //tampilkan gambar pada kanvas
}

function thinningContoh(temp){
	//get image data
	var ctx = temp.getContext('2d');
	var imgData = ctx.getImageData(0,0,64,64);
	//operation	
	var gambar = zeros([64,64]);
	var gambarStep1 = zeros([64,64]);
	var gambarStep2 = zeros([64,64]);
	var j = 0;
	var k = 0;
	var l = 0;
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	gambar[k][j] = imgData.data[i];
	 	j=j+1;
	 	l=l+1;
	}
	while(berhenti!=1){
		var gambar = step1(gambar);
		var gambar = step2(gambar);
	}
	berhenti=0;

	//change image
	var j = 0;
	var k = 0;
	var l = 0;
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	imgData.data[i] = gambar[k][j];
	 	imgData.data[i+1] = gambar[k][j];
	 	imgData.data[i+2] = gambar[k][j];
	 	j=j+1;
	 	l=l+1;
	}

	//show image 
	var kanvas3 = document.getElementById('outputTemp');
	var ctx3 = kanvas3.getContext('2d');
	ctx3.putImageData(imgData,0,0);
}

//cut and resize
function tepi(kanvas){
	//get image data
	var ctx = kanvas.getContext('2d');
	var imgData = ctx.getImageData(0,0,64,64);

	//operations
	var gambar = zeros([64,64]);
	var j = 0;
	var k = 0;
	var l = 0;
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	gambar[k][j] = imgData.data[i];
	 	j=j+1;
	 	l=l+1;
	}
	var x = 0;
	var y = 0;

	//draw image ke canvas
	var kanvas2 = document.getElementById('outputCanvas4'); //inisialisasi canvas
	var ctx2 = kanvas2.getContext('2d');  //render 2d
	ctx2.drawImage(kanvas,tepianX(gambar),tepianY(gambar),tepianX2(gambar)-tepianX(gambar)+1,tepianY2(gambar)-tepianY(gambar)+1,0,0,64,64); //render berdasarkan tepi
}

//mengambil data array gambar
function zeros(dimensions){
	var array = [];
	for(var i=0; i<dimensions[0]; ++i){
		array.push(dimensions.length ==1 ? 0: zeros(dimensions.slice(1)));
	}
	return array;
}

function step1(objek){
	//step 1 zhang suen
	//inisialisasi variable
	var hasil = objek;
	var i = 1;
	var j = 1;
	//looping pixel
	while(i<63){
		while(j<63){
			var jumlahTetangga = tetangga(objek,i,j); //mengambil data matriks tetangga p1
			var jumlahTransisi = transisi(objek,i,j); //mengambil data transisi antar tetangga
			//mengecek apakah matriks p1 = 0
			if(objek[i][j]==0){
				//mengecek apakah memliki tetangga lebih dari 2 dan kurang dari 6
				if(jumlahTetangga>=2*255&&jumlahTetangga<=6*255){
					//mengecek apakah jumlah transisi  dari putih ke hitam = 1
					if(jumlahTransisi==1){
						//mengecek setidaknya salah satu dari p2, p4, p6 putih
						if((objek[i-1][j]*objek[i][j+1]*objek[i+1][j])==0){
							//mengecek setidaknya salah satu dari p4, p6, p8 putih
							if((objek[i][j+1]*objek[i+1][j]*objek[i][j-1])==0){
								//ubah nilai p1 menjadi hitam
								hasil[i][j] = 255;	
							}
						}
					}
				}
			}
			j=j+1;				
		}
		i=i+1;
		j=1;
	}
	return hasil;
}

function step2(objek){
	berhenti = 1;
	var hasil = objek;
	var i = 1;
	var j = 1;
	while(i<63){
		while(j<63){
			var jumlahTetangga = tetangga(objek,i,j); 
			var jumlahTransisi = transisi(objek,i,j);
			if(objek[i][j]==0){
				if(jumlahTetangga>=2*255&&jumlahTetangga<=6*255){
					if(jumlahTransisi==1){
						if((objek[i-1][j]*objek[i][j+1]*objek[i][j-1])==0){
							if((objek[i-1][j]*objek[i+1][j]*objek[i][j-1])==0){
								hasil[i][j] = 255;
								berhenti = 1;	
							}
						}
					}
				}
			}
			j=j+1;				
		}
		i=i+1;
		j=1;
	}
	return hasil;
}

function tetangga(matriks,i,j){
	var nilai = matriks[i-1][j-1]+matriks[i-1][j]+matriks[i-1][j+1]
				+matriks[i][j-1]+matriks[i][j+1]
				+matriks[i+1][j-1]+matriks[i+1][j]+matriks[i+1][j+1];
	return nilai;

	/*
		p9+p2+p3
		p8+	  p4
		p7+p6+p5
	*/

}

function transisi(matriks,i,j){
	var nilai = 0;
	if(matriks[i-1][j-1]<matriks[i-1][j]){ //p9 to p2
		nilai = nilai +1;
	}
	if(matriks[i-1][j]<matriks[i-1][j+1]){ //p2 to p3
		nilai = nilai +1;
	}
	if(matriks[i-1][j+1]<matriks[i][j+1]){ //p3 to p4
		nilai = nilai +1;
	}
	if(matriks[i][j+1]<matriks[i+1][j+1]){ //p4 to p5
		nilai = nilai +1;
	}
	if(matriks[i+1][j+1]<matriks[i+1][j]){ //p5 to p6
		nilai = nilai +1;
	}
	if(matriks[i+1][j]<matriks[i+1][j-1]){ //p6 to p7
		nilai = nilai +1;
	}
	if(matriks[i+1][j-1]<matriks[i][j-1]){ //p7 to p8
		nilai = nilai +1;
	}
	if(matriks[i][j-1]<matriks[i-1][j-1]){ //p8 to p9
		nilai = nilai +1;
	}
	return nilai;
}

function tepianX(matriks){
	var bawah = 64;
	for(var i=0; i<63; i++){
		for(var j =0; j<63; j++){
			if(matriks[i][j]==0){
				if(bawah>j){
					bawah=j;
				}
			}
		}
	}
	return bawah;
}

function tepianY(matriks){
	var atas = 64;
	for(var i=0; i<63; i++){
		for(var j =0; j<63; j++){
			if(matriks[i][j]==0){
				if(atas>i){
					atas=i;
				}
			}
		}
	}
	return atas;
}

function tepianX2(matriks){
	var bawah = -1;
	for(var i=0; i<63; i++){
		for(var j =0; j<63; j++){
			if(matriks[i][j]==0){
				if(bawah<j){
					bawah=j;
				}
			}
		}
	}
	return bawah;
}

function tepianY2(matriks){
	var atas = -1;
	for(var i=0; i<63; i++){
		for(var j =0; j<63; j++){
			if(matriks[i][j]==0){
				if(atas<i){
					atas=i;
				}
			}
		}
	}
	return atas;
}

//thinning steinford
function thinningImage2(kanvas){
	//get image data
	var ctx = kanvas.getContext('2d');
	var imgData = ctx.getImageData(0,0,64,64);
	//operation	
	var gambar = zeros([64,64]);
	var j = 0;
	var k = 0;
	var l = 0;
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	gambar[k][j] = imgData.data[i];
	 	j=j+1;
	 	l=l+1;
	}
	while(berhenti==0){
		thinningTemplate(gambar); //step 1
		thinningTemplate2(gambar); //step 2
	}
	//change image
	j = 0;
	k = 0;
	l = 0;
	for (var i = 0; i < imgData.data.length; i+=4) {
	 	if(l==64){
	 		l=0;
	 		j=0;
	 		k=k+1;
	 	}
	 	imgData.data[i] = gambar[k][j];
	 	imgData.data[i+1] = gambar[k][j];
	 	imgData.data[i+2] = gambar[k][j];
	 	j=j+1;
	 	l=l+1;
	}

	//show image 
	var kanvas3 = document.getElementById('outputCanvas3');
	var ctx3 = kanvas3.getContext('2d');
	ctx3.putImageData(imgData,0,0);
}

function thinningTemplate(gambar){
	berhenti =1;
	var i=0;
	var j=0;
	while(i<62){
		while(j<62){
			var endPoint = gambar[i][j]+gambar[i][j+1]+gambar[i][j+2]+
				gambar[i+1][j]+gambar[i+1][j+2]+
				gambar[i+2][j]+gambar[i+2][j+1]+gambar[i+2][j+2];
			var s1=gambar[i+1][j+2]/255-(gambar[i+1][j+2]*gambar[i+2][j+2]*gambar[i+2][j+1])/(Math.pow(255,3));
			var s2=gambar[i+2][j+1]/255-(gambar[i+2][j+1]*gambar[i+2][j]*gambar[i+1][j])/(Math.pow(255,3));
			var s3=gambar[i+1][j]/255-(gambar[i+1][j]*gambar[i][j]*gambar[i][j+1])/(Math.pow(255,3));
			var s4=gambar[i][j+1]/255-(gambar[i][j+1]*gambar[i][j+2]*gambar[i+1][j+2])/(Math.pow(255,3));
			var connect = s1+s2+s3+s4; console.log(connect);console.log(endPoint);
			if(endPoint<255*7&&connect==1){
				if(gambar[i][j+1]==255&&gambar[i+1][j+1]==0&&gambar[i+2][j+1]==0){
					gambar[i+1][j+1]=255;
					berhenti =0;
				}
			}
			j++;
		}
		j=0;
		i++;
	}
}

function thinningTemplate2(gambar){
	berhenti =1;
	var i=0;
	var j=0;
	while(i<62){
		while(j<62){
			var endPoint = gambar[i][j]+gambar[i][j+1]+gambar[i][j+2]+
				gambar[i+1][j]+gambar[i+1][j+2]+
				gambar[i+2][j]+gambar[i+2][j+1]+gambar[i+2][j+2];
			var s1=gambar[i+1][j+2]/255-(gambar[i+1][j+2]*gambar[i+2][j+2]*gambar[i+2][j+1])/(Math.pow(255,3));
			var s2=gambar[i+2][j+1]/255-(gambar[i+2][j+1]*gambar[i+2][j]*gambar[i+1][j])/(Math.pow(255,3));
			var s3=gambar[i+1][j]/255-(gambar[i+1][j]*gambar[i][j]*gambar[i][j+1])/(Math.pow(255,3));
			var s4=gambar[i][j+1]/255-(gambar[i][j+1]*gambar[i][j+2]*gambar[i+1][j+2])/(Math.pow(255,3));
			var connect = s1+s2+s3+s4; console.log(connect);console.log(endPoint);
			if(endPoint<255*7&&connect==1){
				if(gambar[i+1][j]==255&&gambar[i+1][j+1]==0&&gambar[i+1][j+2]==0){
					gambar[i+1][j+1]=255;
					berhenti =0;
				}
				if(gambar[i][j+1]==0&&gambar[i+1][j+1]==0&&gambar[i+2][j+1]==255){
					gambar[i+1][j+1]=255;
					berhenti =0;
				}
				if(gambar[i+1][j]==0&&gambar[i+1][j+1]==0&&gambar[i+1][j+2]==255){
					gambar[i+1][j+1]=255;
					berhenti =0;
				}
			}
			j++;
		}
		j=0;
		i++;
	}
}

function check_gambar(){
	
}

