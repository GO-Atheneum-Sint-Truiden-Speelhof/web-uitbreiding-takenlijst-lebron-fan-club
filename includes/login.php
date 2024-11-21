<?php 
if (isset($_POST["uname"]) && !empty($_POST["uname"])){
    echo "DOE LOGIN";
    // opzoeken paswoord in databank adhv username
    // password_verify(pwd, hash)
}else { ?>
<h1> Login </h1>
<form action="login.php" method="post">
    <input type="text" placeholder="Username" name="uname" required>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit">Log in.</button>
</form>

<?php } ?>