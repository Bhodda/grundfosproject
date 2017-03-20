<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','grundfos');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"pumps");
$sql="SELECT * FROM pumps WHERE product_nr = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "Product type <input value=" . $row['type'] . "></br>";
    echo "Water flow <input value=" . $row['flow'] . "></br>";
    echo "Pressure <input value=" . $row['pressure'] . "></br>";
    echo "Water level <input value=" . $row['water_level'] . "></br>";
    echo "Power consuption <input value=" . $row['power'] . "></br>";
}

mysqli_close($con);

?>
</body>
</html>

