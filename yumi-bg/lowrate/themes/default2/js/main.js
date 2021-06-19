function ajaxFunction(what,divID) {
	var xmlHttp;
	if(window.XMLHttpRequest) {
		xmlHttp = new XMLHttpRequest();
	}
	else if(window.ActiveXObject) {
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	} else if(window.ActiveXObject) {
		xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
	}
	else {
		alert("Your browser is not IE 5 or higher, or Firefox or Safari or Opera.");
	}
	xmlHttp.onreadystatechange=function() {
		if(xmlHttp.readyState==4) {
			if ((xmlHttp.responseText.indexOf("HTTP Error") > 0) || (xmlHttp.responseText == "")) {
				alert("Error: " + xmlHttp.responseText);
				return false;
			}
			else {
					//alert(xmlHttp.responseText);
					if (xmlHttp.responseText.indexOf("Done!!!") > 0) {
						document.getElementById(divID).innerHTML = xmlHttp.responseText;
					}
			}
		}
		else {
			return false;
		}
	}
	xmlHttp.open("GET", what, true);
	xmlHttp.send(null);
}

function GetMenuDisplay(what,myDiv){
	if(what != "wallpaper"){
		var productElement = document.getElementById("wallContainer");
		if (productElement != null){
			document.getElementById("wallContainer").style.display='none';
		}		
		ajaxFunction("ajax_menu.php?what=" + what,myDiv);
		document.getElementById("mainContainer").style.display='block';
	}else{
		document.getElementById("mainContainer").style.display='none';
		document.getElementById("wallContainer").style.display='block';
		//ajaxFunction("ajax_menu.php?what=" + what,myDiv);
	}
}


function toggle_visibility(id) {
   var e = document.getElementById(id);
   if(e.style.display == 'block')
	  e.style.display = 'none';
   else
	  e.style.display = 'block';
}


function GetContent(content){
	document.getElementById('FeatContainer').innerHTML = "<strong>Features:</strong><br>* Loading....";
	ajaxFunction("_model/Features2.cfm?CatGroup=" + document.getElementById("CatGroup").value + "&mycatid=" + catid + "&mymakeid=" + makeid + "&mymodel=" + model + "&mysno=" + sno + "&myyear=" + year + "&features=" + features,'FeatContainer');
}

function gJXHidden(actPage,param) {
	
	var html = $.ajax({
		url: actPage,
		type: 'POST',
		data: param,
		async: false
	}).responseText;
	return html;
	
}
	
function loadPAGE(id,p,params) {
	document.getElementById(id).innerHTML = "Loading Data....."
	document.getElementById(id).innerHTML = gJXHidden(p,params);
	
}

function showmessage(id){
		
	var newsid = "newsid=" + id
	
	$(".block_div").fadeIn('fast', function () {
         $("#popupmess").fadeIn('slow', function () {
											  
			loadPAGE('popupmess','Ajax_News_Content.php',newsid);
			$(".block_div").css("display","block");
			
		});
	
	 });
	
	
	
}

function close_message(){
	$("#popupmess").fadeOut('slow', function () {
			 $(".block_div").fadeOut('slow', function () {
			//loadPAGE('popupmess','Ajax_close.php','close=Loading');
        });
     });
}


function gologin(){
	if (x == false){
		$('#LogIn').slideDown('slow', function() {
			x = true;
		});
		//document.getElementById('LogInButton').style.display='none'; 
	}else{
		$('#LogIn').slideUp('slow', function() {
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