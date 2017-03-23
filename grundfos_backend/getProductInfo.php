<?php
$servername = "localhost";
$username = "root";
$password = "";

// Connect to database and save connection in $dbh
try {
    $dbh = new PDO("mysql:host=$servername;dbname=grundfos", $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();die();
    }



// prepare sql and bind parameters
    $stmt = $dbh->prepare("SELECT * FROM pumps WHERE product_nr = :product_nr");
    $stmt->bindParam(':product_nr', $product_nr);


// get the value from the GET superglobal
    $product_nr = $_GET["product_nr"];


    // Run the shit
    $stmt->execute();

    // get the results
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //var_dump($result);

    // tell the browsers that this is json and not text/html
    header('Content-Type: application/json');

    // make the $result array into some nice JSON
    echo json_encode($result);

?>