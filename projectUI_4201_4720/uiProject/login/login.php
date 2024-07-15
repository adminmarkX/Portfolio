<?php

$username = $_POST["username"];
$password = $_POST["password"];

$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';

echo $username;
echo $password;

// Create connection
$conn = new mysqli($host, $dbusername, $dbpass,$dbname);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result =  mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
print_r($data);

if(isset($_POST["username"])){

    if($data['username'] == $username){
        if(password_verify($password,$data['passwords'])){
                session_start();
                $_SESSION["username"] = $data['username'];
                echo $_SESSION["username"];
                header('Location: ../welcomepage/welcome.html');
            }
        }
}
?>