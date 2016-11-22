var i=0;

function changeSliderImages(){
	var images = ["img/apples.jpg", "img/caramel.jpg", "img/cider.jpg", "img/people.jpg", "img/wine.jpg"];
	//for (var i = 0; i<images.length; i++) {
		var image = document.getElementById("photo");
		image.src = images[i];
	//}
	i+=1;
	console.log('hi');
}

//change image automatically every 2 sec
setTimeout(changeSliderImages(), 2000);

function nextImage(){
	var images = ["img/apples.jpg", "img/caramel.jpg", "img/cider.jpg", "img/people.jpg", "img/wine.jpg"];
	//for (var i = 0; i<images.length; i++) {
		var image = document.getElementById("photo");
		image.src = images[i];
	//}
	i+=1;
}
function previousImage(){
	var images = ["img/apples.jpg", "img/caramel.jpg", "img/cider.jpg", "img/people.jpg", "img/wine.jpg"];
	//for (var i = 0; i<images.length; i++) {
		var image = document.getElementById("photo");
		image.src = images[i];
	//}
	i-=1;
}