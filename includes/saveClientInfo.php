<?php

$servername = 'localhost';
$username = 'root';
$password = '';

// Connect to database and save connection in $dbh

if(isset($_POST['product_nr'])) {
    try {
        $dbh = new PDO("mysql:host=$servername;dbname=grundfos", $username, $password);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
        die();
    }

    $product_nr = $_POST["product_nr"];
    $pump_location = $_POST["pump_location"];
    $pump_usage = $_POST["pump_usage"];
    $client_name = $_POST["client_name"];
    $client_phone = $_POST["client_phone"];
    $client_city = $_POST["client_city"];
    $client_zip = $_POST["client_zip"];
    $client_address = $_POST["client_address"];
    $client_email = $_POST["client_email"];



    $pdoQuery = "INSERT INTO clientdatabase (product_nr, pump_location, pump_usage, client_name, client_phone, client_city, client_zip, client_address, client_email)
	VALUES (
	:product_nr, 
	:pump_location, 
	:pump_usage, 
	:client_name, 
	:client_phone, 
	:client_city, 
	:client_zip, 
	:client_address, 
	:client_email )";


    $pdoResult = $dbh->prepare($pdoQuery);

    $pdoResult->bindParam(':product_nr', $product_nr);
    $pdoResult->bindParam(':pump_location', $pump_location);
    $pdoResult->bindParam(':pump_usage', $pump_usage);
    $pdoResult->bindParam(':client_name', $client_name);
    $pdoResult->bindParam(':client_phone', $client_phone);
    $pdoResult->bindParam(':client_city', $client_city);
    $pdoResult->bindParam(':client_zip', $client_zip);
    $pdoResult->bindParam(':client_address', $client_address);
    $pdoResult->bindParam(':client_email', $client_email);


    $pdoExec = $pdoResult->execute(array(
        ":product_nr"=>$product_nr, 
        ":pump_location"=>$pump_location, 
        ":pump_usage"=>$pump_usage, 
        ":client_name"=>$client_name, 
        ":client_phone"=>$client_phone,  
        ":client_city"=>$client_city, 
        ":client_zip"=>$client_zip, 
        ":client_address"=>$client_address, 
        ":client_email"=>$client_email, ));

    if($pdoExec)
    {
        echo 'Data inserted';
    }else {
        echo 'Data not inserted';
    }
}
?>