var i=0;
var images = ["img/apples.jpg", "img/caramel.jpg", "img/cider.jpg", "img/people.jpg", "img/wine.jpg"];
//Photo Source: apples.jpg- https://www.facebook.com/downtownithaca/photos/a.10157479674205576.1073741855.132710300575/10157479674845576/?type=3&theater
//Photo Source: caramel.jpg- https://www.facebook.com/downtownithaca/photos/a.10157479674205576.1073741855.132710300575/10157479674630576/?type=3&theater
//Photo Source: caramel.jpg- https://www.facebook.com/downtownithaca/photos/a.10157479674205576.1073741855.132710300575/10157479675900576/?type=3&theater
//Photo Source: people.jpg- https://www.facebook.com/downtownithaca/photos/a.10157479674205576.1073741855.132710300575/10157479674740576/?type=3&theater
//Photo Source: wine.jpg- https://www.facebook.com/downtownithaca/photos/a.10157479674205576.1073741855.132710300575/10157479675475576/?type=3&theater

var image = document.getElementById("photo");
function nextImage(){
	console.log('hi');
	if (i == images.length - 1) {
		i = 0;
	}
	else{
		i+=1;
	}
	image.src = images[i];
}
function previousImage(){
	if (i == 0){
		i = images.length - 1;
	}
	else{
		i-=1;
	}
	image.src = images[i];
}

setInterval('nextImage()', 2000);



/*
function changeSliderImages(){
	//for (var i = 0; i<images.length; i++) {
		var image = document.getElementById("photo");
		image.src = images[i];
	//}
	i+=1;
	console.log('hi');
}

//change image automatically every 2 sec
setTimeout(changeSliderImages(), 2000);
*/
