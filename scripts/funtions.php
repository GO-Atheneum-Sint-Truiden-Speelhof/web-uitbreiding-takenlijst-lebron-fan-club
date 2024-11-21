<?php
function connectToDB(){
    $servername = "localhost";
    $username = "test";
    $password = "test";
    $dbname = "test";

    $conn  = new mysqli($servername, $username, $password,$dbname);

    if ($conn->connect_error) {
    
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
function login(){
    $conn = connectToDB();
    $User = $_POST['Username'];
    $psw = $_POST['Password'];

    $sql = "SELECT * FROM login WHERE Username ='$User' AND Password ='$psw'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "<p>Login succes </p>";
        header("refresh: 2 ; URL = begin.php?page=inschrijving");

    }
    $conn->close();
}

        ?>