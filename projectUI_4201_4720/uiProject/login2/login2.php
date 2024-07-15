<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];


$host = 'localhost';
$dbname = 'travel_agency';
$dbusername = 'root';
$dbpass = 'root';

// Create connection
$conn = new mysqli($host, $dbusername, $dbpass,$dbname);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result =  mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);

if(isset($_POST["username"])){

    if($data['username'] == $username){
        if(password_verify($password,$data['passwords'])){
                $_SESSION["username"] = $data['username'];
                $_SESSION["id"] = $data['id'];
                header('Location: ../welcomepage/welcome.html');
            }
            else{
                echo password_verify($data['passwords'],$password);
                echo password_verify($password,$data['passwords']);
                echo $password;
                echo $data['passwords'];
                echo "wrong password";
            }
        }else{
            echo "Wrong username";
        }
}
?>