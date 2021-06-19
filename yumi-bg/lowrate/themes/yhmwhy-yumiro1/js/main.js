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
		$('#ToLogin').hide();
		$('#LogIn').slideDown('fast', function() {
			x = true;
		});
		//document.getElementById('LogInButton').style.display='none'; 
	}else{
		$('#ToLogin').show();
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
						fillup();
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

function CallMall(){
	//document.getElementById("ItemMall").style.backgroundPosition='bottom center';
	//document.getElementById("FeaturedItem").style.backgroundPosition='top center';
	//document.getElementById("myMall").style.display='block';
	//document.getElementById("myFeat").style.display='none';
	$("#trueContainer").html(q1);
	onresize();
	fillup();
}


function CallFeat(){
	//document.getElementById("FeaturedItem").style.backgroundPosition='bottom center';
	//document.getElementById("ItemMall").style.backgroundPosition='top center';
	//document.getElementById("myMall").style.display='none';
	//document.getElementById("myFeat").style.display='block';
	$("#trueContainer").html(q2);
	onresize();
	fillup();
}


/*function CallMall(){
	document.getElementById("ItemMall").style.backgroundPosition='bottom center';
	document.getElementById("FeaturedItem").style.backgroundPosition='top center';
	ajaxFunction('AJAX_Mall.php','trueContainer');
}


function CallFeat(){
	document.getElementById("FeaturedItem").style.backgroundPosition='bottom center';
	document.getElementById("ItemMall").style.backgroundPosition='top center';
	ajaxFunction('AJAX_Feat.php','trueContainer');
}
*/

function GetTips(myDiv){
		document.getElementById(myDiv).innerHTML = "Loading Data.....";
		ajaxFunction('Ajax_Tips_Content.php',myDiv);
}



///////////// AJAX SYNTAX START HERE ///////////////////////////////
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
	document.getElementById(id).innerHTML = gJXHidden(p,params);
}
///////////// AJAX SYNTAX END HERE ///////////////////////////////
///////////POP UP CODES //////////////////////////
function showitem(id){
	var screen_W = screen.width;
	var popup_W = 500;
	var desired_pos = (screen_W/2) - (popup_W/2);
	$("#popupmess").css("left",desired_pos + "px");
		var itemid = "itemid=" + id
		$("#block_div").fadeIn('fast', function () {
			$("#popupmess").fadeIn('slow', function () {
				loadPAGE('popupmess','AJAX_GetItem.php',itemid);
				document.getElementById('block_div').style.visibility = "visible";
			});
		});
}

function close_message(){
	$("#popupmess").fadeOut('slow', function () {
			$("#block_div").fadeOut('slow', function () {
				loadPAGE('popupmess','<p>Loading...</p>','');
			 });
     });
}