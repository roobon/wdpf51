var mywin;

function passdata(){
	let fullname = document.info.fullname.value;
	let address = document.info.address.value;
	let allinfo;

	mywin = window.open("", "", "height=300,width=500,top=300,left=500");
	allinfo = "<h2>All My information</h2>";
	allinfo += "<p>Fullname: " + fullname  + "</p>";
	allinfo += "<p>Address: " + address  + "</p>";

	mywin.document.write(allinfo);

	// mywin.document.write("<h2>All My information</h2>");
	// mywin.document.write("<p>Fullname: " + fullname  + "</p>");
	// mywin.document.write("<p>Address: " + address  + "</p>");
}

