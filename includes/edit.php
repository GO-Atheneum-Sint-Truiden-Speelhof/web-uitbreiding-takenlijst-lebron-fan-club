<?php print_r($_POST); 


$sql = "UPDATE info SET NaamMaker='".$_POST["maker"].'",'; 
$sql = "UPDATE info SET NaamTaak='".$_POST["task"].'",'; 
$sql = "UPDATE info SET Beschrijving='".$_POST["desc"].'",'; 
$sql = "UPDATE info SET Status='".$_POST["status"].'",'; 
$sql = "UPDATE info SET Deadline='".$_POST["deadline"].'",'; 

?>