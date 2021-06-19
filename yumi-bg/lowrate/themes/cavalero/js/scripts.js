function ImagePreload()
{
	var imgs = new Array("login-hover-button.png", "forgot-password-hover-button.png", "home-hover.png", "forum-hover.png", "download-hover.png", "donate-hover-button.png", "rms-hover-button.png", "v4p-hover-button.png", "screenshots-hover-button.png", "staff-info-hover-button.png", "informations-hover-button.png", "facebook-hover-button.png", "twitter-hover-button.png");
	var len = imgs.length;
	for(var i=0; i<len; i++) {
		var img = new Image();
		img.src = 'themes/cavalero/img/'+imgs[i];
	}
}

var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December")
var serverdate = new Date(currenttime)

function padlength(what)
{
	var output = (what.toString().length==1)? "0"+what : what;
	return output;
}
	
function displaytime()
{
	serverdate.setSeconds(serverdate.getSeconds()+1)
	var timestring = padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
	document.getElementById("server-time").innerHTML = timestring
}

function reload()
{
	window.location.href = '<?php echo $this->url ?>';
}


$(document).ready(function() {
	ImagePreload();
	
	displaytime();
	setInterval("displaytime()", 1000);
	$('#youtube-video').hide();
	$('#video').click(function() {
		$('#youtube-video').show();
	});
});