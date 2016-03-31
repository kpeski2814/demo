function creaAjax() {
var req;
try {
	req = new XMLHttpRequest();
} catch(err1) {
	try {
		req = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (err2) {
		try {
			req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (err3) {
				req = false;
			}
		}
	}
	return req;
}

oAjax = creaAjax();

function fAjax(archivo,vars,divid){
	myRand = parseInt(Math.random()*999999999999999);
	var modurl = archivo +"?rand=" + myRand + vars; 
	oAjax.open("GET", modurl, true);
	mydiv = divid;
	oAjax.onreadystatechange = rAjax;
	oAjax.send(null);
}

function rAjax() {
	if (oAjax.readyState == 4) {
		if(oAjax.status == 200) {
			var miTexto = oAjax.responseText;
			document.getElementById(mydiv).innerHTML = (miTexto);
		}
	}
}
