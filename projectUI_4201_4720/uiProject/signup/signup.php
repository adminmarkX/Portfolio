<?php

// $username = $this->session->userdata('username');
// $username = trim($username);

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$tkk = $_POST["tk"];
$country = $_POST["country"];
$password2 = $_POST["repassword"];
$date_of_registered = date("Y/m/d");

$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';

if($password == $password2){
// Create connection
$conn = new mysqli($host, $dbusername, $dbpass,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$hashedpwd = password_hash($password,PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username,passwords,email,name,lastname,phone,address,tk,country,date_of_registered) VALUES(?,?,?,?,?,?,?,?,?,?) ";
$result = $conn->prepare($sql);
$result-> execute(array($username,$hashedpwd, $email, $name, $lastname,$phone, $address, $tkk, $country,$date_of_registered));
header('Location: ../welcomepage/welcome.html');
$conn->close();
}






?>