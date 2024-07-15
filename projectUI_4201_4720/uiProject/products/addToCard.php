<?php

// $username = $this->session->userdata('username');
// $username = trim($username);


$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';

$conn = new mysqli($host, $dbusername, $dbpass,$dbname);

$productName = $_POST["addToCard"];
$userID = $_POST["userID"];
$date_of_registered = date("Y/m/d");
$num = $_POST["num"];

$sql = "INSERT INTO user_purschace_products (product_name,date_of_purchase,user_id) VALUES(?,?,?) ";
$result = $conn->prepare($sql);
$result-> execute(array($productName ,$date_of_registered, $userID));


$sql3 = "SELECT * FROM products WHERE name_of_product = '$productName'";
$result =  mysqli_query($conn, $sql3);
$dataAvailable = mysqli_fetch_assoc($result);
$dataAvailable["available"] = $dataAvailable["available"]-$num;
$finalCount = $dataAvailable["available"];

$sql2 = "UPDATE products SET available = '$finalCount'  WHERE name_of_product = '$productName' AND available>0";
$result =  mysqli_query($conn, $sql2);
$data = mysqli_fetch_assoc($result);

$conn->close();

?>