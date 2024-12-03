<?php
function connectToDB()
{
    $servername = "localhost";
    $username = "root";
    $password = "";  
    $dbname = "takenlijst";

    $conn  = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
       return $conn;
}

function SaveToDb(){

    $conn = connectToDB();    
    $sql = "INSERT INTO info(NaamMaker, NaamTaak, Beschrijving, Status, Deadline)
    VALUES ('".$_POST["naammaker"]."','".$_POST["naamtaak"]."','".$_POST["beschrijving"]."','".$_POST["status"]."','".$_POST["deadline"]."');";

    if($conn->query($sql) === true){
        echo "New record created!";
        header("refresh:3;URL=begin.php?page=start");
    }
    else{
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
function getTaak($id){
    $conn= connectToDB();
    $sql = "SELECT * FROM info WHERE ID=".$id;
   // echo $sql;
    $result = $conn->query($sql);
    //print_r($result);
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }
    
}
function geefInsch(){
    $conn = connectToDB();
    $sql = "SELECT * FROM info";



    $result = $conn->query($sql);
    while($row = $result->fetch_row()) {
        echo '<tr>';
        for($i=0;$i<count($row);$i++){
            echo "<td>";
            echo "$row[$i]";    
            echo"</td>";
        }  
        echo "<td><a href='begin.php?page=start&actie=edit&id=".$row[0]."'>EDIT</a></td>";
        echo "<td><a href='begin.php?page=start&actie=delete&id=".$row[0]."'>Delete</a></td>";
        echo"</tr>";
        
    }
}

function deleteRow($id){
    $conn = connectToDB();

    $sql = "DELETE FROM info WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


function login(){
    $conn = connectToDB();
    $User = $_POST['uname'];
    $psw = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE username ='$User' AND password ='$psw'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "<p> Login succesvol geluk! </p>";
        header("refresh: 2 ; URL = begin.php?page=login");

    }
    $conn->close();
}
//$pwd = password_hash($_POST["Password"],PASSWORD_DEFAULT);
// password_verify(pwd, hash)  (pwd = user input, hash = db value)

?>