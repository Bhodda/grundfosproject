<!DOCTYPE html>
<html>
<head>
	<title>Test of database connection</title>
	<style type="text/css">
		#status {display:block; width:20px; height:20px;}
		#status.success {background-color: green;}
	</style>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

<section>
<form method="post" action="">

	<div id="status"></div>
	<label for="product_nr">What your product number</label>
	<input type="text" name="product_nr" id="product_nr" value=""><br>

<section>
	<label for="type">Type</label>
	<input type="text" name="type" id="type" value="">
	<label for="water_level">Water level</label>
	<input type="text" name="water_level" id="water_level" value="">
	<label for="flow">Flow</label>
	<input type="text" name="flow" id="flow" value="">
	<label for="power">Power</label>
	<input type="text" name="power" id="power" value="">
	<label for="pressure">Pressure</label>
	<input type="text" name="pressure" id="pressure" value="">
</section>
<br>
<br>

	<label for="pump_location">Where pump is located</label>
	<input type="text" name="pump_location" id="pump_location" value=""><br>
	<label for="pump_usage">What pump is used for</label>
	<textarea name="pump_usage" id="pump_usage" value=""></textarea><br>
	<label for="client_name">Name</label>
	<input type="text" name="client_name" id="client_name" value=""><br>
	<label for="client_country">Country</label>
	<input type="text" name="client_country" id="client_country" value=""><br>
	<label for="client_city">City</label>
	<input type="text" name="client_city" id="client_city" value=""><br>
	<label for="client_zip">Zip</label>
	<input type="text" name="client_zip" id="client_zip" value=""><br>
	<label for="client_address">Address</label>
	<input type="text" name="client_address" id="client_address" value=""><br>
	<label for="client_email">E-mail</label>
	<input type="text" name="client_email" id="client_email" value=""><br>
	
	<input id="submit_form" type="submit" value=" Submit " name="submit"/><br>
</form>
</section>

<!--  Ajax scripts for getting and posting data from input fields -->
<script type="text/javascript">
$(document).ready(function() {
$('#submit_form').click(function (e) {
e.preventDefault();

var data = {};
data.product_nr = $('#product_nr').val();
data.pump_location = $('#pump_location').val();
data.pump_usage = $('#pump_usage').val();
data.client_name = $('#client_name').val();
data.client_country = $('#client_country').val();
data.client_city = $('#client_city').val();
data.client_zip = $('#client_zip').val();
data.client_address = $('#client_address').val();
data.client_email = $('#client_email').val();

$.ajax({
type: "POST",
url: "saveClientInfo.php",
data: data,
cache: false,
success: function (data) {
               alert('New Record Inserted Successfully'); // show response from the php script.
           },
        });
            return false;
    });

});
</script>
<script type="text/javascript">
$("#product_nr").keyup(function() { // when users type in the input field
	$.get( "getProductInfo.php?product_nr="+$("#product_nr").val(), function( data ) {
		// ajax call with the typed in data as GET
		console.log(data);
	if(data == false) { // no pump found with that product_nr
		console.log("nope, baby!");
		$("#status").removeClass("success");
	}else { // we found a pump!
		console.log("yeah, baby!");
		$("#type").val(data.type);
		$("#water_level").val(data.water_level);
		$("#flow").val(data.flow);
		$("#power").val(data.power);
		$("#pressure").val(data.pressure);
		$("#status").addClass("success");
	}
});
});
</script> 
</body>
</html>