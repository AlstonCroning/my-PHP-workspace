//adding an click event
var clickevent = document.getElementsByTagName("input")[5];
clickevent.addEventListener( "click", WhenEventOccurs);


//creating new xmlhttp request object
var xmlhttp;
if(window.XMLHttpRequest)
{
	xmlhttp = new XMLHttpRequest();
}
else
{
	xmlhttp = new Activexobject("Microsoft.XMLHTTP");
}

function WhenEventOccurs () {	
	xmlhttp.open( "POST", "http://localhost/Workspace/Prep/Using-Ajax/GuestlistForm.php", false );
	xmlhttp.send();

	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("message").innerHTML = xmlhttp.responseText;
		}
		else {
			document.getElementById("message").innerHTML = "<strong>Waiting for the Server Response</strong>";
		}
	}
}