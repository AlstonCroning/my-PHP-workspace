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
	xmlhttp.open( "POST", "GuestlistForm.php" );

	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//document.getElementById("message").value = xmlhttp.responseText;
			var returnedData = xmlhttp.responseText;
			var message = document.getElementById("message");
			message.innerHTML = returnedData;
		}
		else {
			document.getElementById("message").innerHTML = "<strong>Waiting for the Server Response</strong>";
		}
	}
	
	var firstname = document.getElementsByTagName("input")[1];
	xmlhttp.send(firstname);

	return false;
}