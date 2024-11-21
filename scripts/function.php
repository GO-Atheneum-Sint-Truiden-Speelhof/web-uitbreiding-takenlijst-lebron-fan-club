<?php

function connectDB()
{
    $servername = "localhost";
    $username = "Test";
    $password = "123";  
    $dbname = "takenlijst";

    $conn  = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
       return $conn;
}

function login(){
    $conn = connectDB();
    $User = $_POST['username'];
    $psw = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username ='$User' AND password ='$psw'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "<p> Login succesvol geluk! </p>";
        header("refresh: 2 ; URL = begin.php?page=inschrijvingen");

    }
    $conn->close();
}

?>