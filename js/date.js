    /*
    * cs1300 Final Project
    */
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    weekNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    window.onload = function date() {
    	var date, day, month, year;
	// get pieces of date
	date = new Date();
	// get monthe and 
	day = date.getDate();
	month = monthNames[date.getMonth()];
	year = date.getFullYear();
	// set info up for insertion into DOM tree using span element
	dateSpan = document.createElement('span');
	dateText = document.createTextNode(day +" "+ month + " "+year);
	position = document.getElementsByTagName('footer')[0];

	//append date to the footer
	dateSpan.appendChild(dateText);
	position.appendChild(dateSpan);


}