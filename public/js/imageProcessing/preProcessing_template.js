//black and white image
function colorImage(src,dst){
	let low = new cv.Mat(src.rows, src.cols, src.type(), [0,0,0,255]);
    let high = new cv.Mat(src.rows, src.cols, src.type(), [0,0,0,255]);
    
    cv.inRange(src, low, high, dst);

    cv.imshow('outputTemplate2', dst);
    var template_image = document.getElementById('outputTemplate2');
	var ctx = template_image.getContext('2d');
	var imgData = ctx.getImageData(0,0,64,64);
	for(var i = 0; i<imgData.data.length; i+=4){
		imgData.data[i] =  255-imgData.data[i];
	 	imgData.data[i+1] = 255-imgData.data[i+1];
	 	imgData.data[i+2] = 255-imgData.data[i+2];
	 	imgData.data[i+3] = 255;
	}
	ctx.putImageData(imgData,0,0);

    low.delete(); high.delete();src.delete(); dst.delete();
}

// thinning zhen suen
var berhenti = 0;
function thinningImage(template_image){
	//get image data
	var ctx = template_image.getContext('2d');
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
	while(berhenti==0){
		var gambar = step1(gambar);
		var gambar = step2(gambar);
	}

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
	var template3 = document.getElementById('outputTemplate3');
	var ctx3 = template3.getContext('2d');
	ctx3.putImageData(imgData,0,0);
}

//cut and resize
function tepi(template_image){
	//get image data
	var ctx = template_image.getContext('2d');
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

	//draw image
	var template2 = document.getElementById('outputTemplate4');
	var ctx2 = template2.getContext('2d');
	ctx2.drawImage(template_image,tepianX(gambar),tepianY(gambar),tepianX2(gambar)-tepianX(gambar)+1,tepianY2(gambar)-tepianY(gambar)+1,0,0,64,64);
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
						if((objek[i-1][j]*objek[i][j+1]*objek[i+1][j])==0){
							if((objek[i][j+1]*objek[i+1][j]*objek[i][j-1])==0){
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
								berhenti = 0;	
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
}

function transisi(matriks,i,j){
	var nilai = 0;
	if(matriks[i-1][j-1]<matriks[i-1][j]){
		nilai = nilai +1;
	}
	if(matriks[i-1][j]<matriks[i-1][j+1]){
		nilai = nilai +1;
	}
	if(matriks[i-1][j+1]<matriks[i][j+1]){
		nilai = nilai +1;
	}
	if(matriks[i][j+1]<matriks[i+1][j+1]){
		nilai = nilai +1;
	}
	if(matriks[i+1][j+1]<matriks[i+1][j]){
		nilai = nilai +1;
	}
	if(matriks[i+1][j]<matriks[i+1][j-1]){
		nilai = nilai +1;
	}
	if(matriks[i+1][j-1]<matriks[i][j-1]){
		nilai = nilai +1;
	}
	if(matriks[i][j-1]<matriks[i-1][j-1]){
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

