<html>
<head>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<script>
function showRSS(xValue) {
	$.get( "getrss.php?items=" + xValue, function( data ) {
	  $( "#rssOutput" ).html( data );
	});
}
</script>
</head>
<body>

<form>
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="5">cargar 5</option>
<option value="3">cargar 3</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>
</body>
</html>