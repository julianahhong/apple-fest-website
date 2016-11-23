var i=0;
var images = ["img/apples.jpg", "img/caramel.jpg", "img/cider.jpg", "img/people.jpg", "img/wine.jpg"];
var image = document.getElementById("photo");

function nextImage(){
	if (i == images.length - 1) {
		i = 0;
	}
	else{
		i+=1;
	}
	image.src = images[i];
	highlightDot();
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