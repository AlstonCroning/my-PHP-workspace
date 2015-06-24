//global declarations
var click_event = document.getElementsByTagName("input")[1];
click_event.addEventListener("click", WhenEventOccurs);

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

//function declaration
function WhenEventOccurs () 
{
	if(xmlhttp) {
		xmlhttp.open( "POST", "Form_ajax.php");
		
		xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
		
		xmlhttp.onreadystatechange = function () 
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
				var returnedData = xmlhttp.responseText;
				var message = document.getElementById("message");
				message.innerHTML = returnedData;
			}
			else 
			{
				document.getElementById("message").innerHTML = "<strong>Waiting for the Server Response</strong>";
			}
		}
		var user_input = document.getElementsByTagName("input")[0].value;	
		var data = user_input;
		xmlhttp.send("data=" + data);
	}
	return false;
}


