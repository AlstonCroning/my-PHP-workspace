//creating new xmlhttp request object
var xmlhttp = false;
if(window.XMLHttpRequest)
{
	xmlhttp = new XMLHttpRequest();
}
else
{
	xmlhttp = new Activexobject("Microsoft.XMLHTTP");
}

	
xmlhttp.open( "POST", "Form_ajax.php");
xmlhttp.send();
xmlhttp.onreadystatechange = function () {
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var returnedData = xmlhttp.responseText;
		var message = document.getElementById("message");
		message.innerHTML = returnedData;
	}
	else {
		document.getElementById("message").innerHTML = "<strong>Waiting for the Server Response</strong>";
	}
}



