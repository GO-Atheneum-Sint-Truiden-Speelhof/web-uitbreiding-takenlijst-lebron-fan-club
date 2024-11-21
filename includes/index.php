<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  if (isset($_POST["username"]) && !empty($_POST["username"]))
    {
        $servername = 'localhost';
        $database = 'Takenlijst';
        $db_user = 'localhost';
        $db_pwd = '';

        $conn = new mysqli($servername, $db_user, $db_pwd, $database);
        if ($conn -> connect_errno)
        {
            echo 'failed to connect' .$conn -> connect_error;

        }
        $qry = "SELECT password FROM users WHERE username = '".$_POST["username"]."'";
        echo $qry;
        $result = $conn->query($qry)
    }
    else{
        echo 
    }
    ?>
</body>4
</html>