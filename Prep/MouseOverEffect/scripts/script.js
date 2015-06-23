var stylediv = document.getElementById("stylediv");

var image = document.getElementsByTagName("img")[0];
image.addEventListener("mouseover", AppearImage);
image.addEventListener("mouseout", Hideimage);

function AppearImage() {
	stylediv.style.visibility = 'visible';
}

function Hideimage() {
	stylediv.style.visibility = 'hidden';
}