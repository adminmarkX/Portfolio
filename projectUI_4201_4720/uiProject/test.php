<?php 

$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';

$conn = new mysqli($host, $dbusername, $dbpass,$dbname);

    $sql3 = "SELECT * FROM products WHERE name_of_product = '$productName'";
    $result =  mysqli_query($conn, $sql3);
    $dataAvailable = mysqli_fetch_assoc($result);
    echo $dataAvailable["available"];
    $dataAvailable["available"] = $dataAvailable["available"]-1;
    echo $dataAvailable["available"];
    $finalCount = $dataAvailable["available"];

    $sql2 = "UPDATE products SET available = '$finalCount'  WHERE name_of_product = '$productName' AND available>0";
    $result =  mysqli_query($conn, $sql2);
    $data = mysqli_fetch_assoc($result);

    ?>