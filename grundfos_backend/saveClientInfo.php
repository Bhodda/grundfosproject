<?php
$servername = 'localhost';
$username = 'root';
$password = '';

// Connect to database and save connection in $dbh
try {
	$dbh = new PDO("mysql:host=$servername;dbname=grundfos", $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();die();
}

$product_nr = $_POST["product_nr"];
$pump_location = $_POST["pump_location"];
$pump_usage = $_POST["pump_usage"];
$client_name = $_POST["client_name"];
$client_country = $_POST["client_country"];
$client_city = $_POST["client_city"];
$client_zip = $_POST["client_zip"];
$client_address = $_POST["client_address"];
$client_email = $_POST["client_email"];

$stmt = $dbh->prepare("INSERT INTO clientdatabase (product_nr, pump_location, pump_usage, client_name, client_country, client_city, client_zip, client_address, client_email)
	VALUES (:product_nr, 
	:pump_location, 
	:pump_usage, 
	:client_name, 
	:client_country, 
	:client_city, 
	:client_zip, 
	:client_address, 
	:client_email )");

$stmt->bindParam(':product_nr', $product_nr);
$stmt->bindParam(':pump_location', $pump_location);
$stmt->bindParam(':pump_usage', $pump_usage);
$stmt->bindParam(':client_name', $client_name);
$stmt->bindParam(':client_country', $client_country);
$stmt->bindParam(':client_city', $client_city);
$stmt->bindParam(':client_zip', $client_zip);
$stmt->bindParam(':client_address', $client_address);
$stmt->bindParam(':client_email', $client_email);

$stmt->execute();
?>