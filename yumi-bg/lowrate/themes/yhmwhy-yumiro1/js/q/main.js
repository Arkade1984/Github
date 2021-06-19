var x = false;

function LoadPics(myIMG)
{
	var file_location = document.getElementById('IMGContainer');
	file_location.innerHTML='<img src=' + myIMG + ' width=177 height=116></img>';
}

function MyLoadPic(what){
	document.getElementById('img1').style.backgroundPosition='top center';
	document.getElementById('img2').style.backgroundPosition='top center';
	document.getElementById('img3').style.backgroundPosition='top center';
	document.getElementById('img4').style.backgroundPosition='top center';
	document.getElementById('img5').style.backgroundPosition='top center';
	document.getElementById('img6').style.backgroundPosition='top center';
	
	what.style.backgroundPosition='bottom center';
}

function gologin(){
	if (x == false){
		$('#LogIn').slideDown('fast', function() {
			x = true;
		});
		//document.getElementById('LogInButton').style.display='none'; 
	}else{
		$('#LogIn').slideUp('fast', function() {
			x = false;
		});
		//document.getElementById('LogInButton').style.display='block'; 
	}	
}


function focal() {
if (document.getElementById("login_username").value == "[username]") {
document.getElementById("login_username").value="";
}
}
function focal2() {
if (document.getElementById("login_username").value == "") {
document.getElementById("login_username").value="[username]";
}
}
function focalpass() {
if (document.getElementById("login_password").value == "[password]")
document.getElementById("login_password").value="";
}
function focalpass2() {
if (document.getElementById("login_password").value == "")
document.getElementById("login_password").value="[password]";
}

function toggle_visibility(id) {
   var e = document.getElementById(id);
   if(e.style.display == 'block')
	  e.style.display = 'none';
   else
	  e.style.display = 'block';
}
