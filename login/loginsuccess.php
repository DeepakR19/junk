
<meta charset="utf-8">
<?php

session_start();


if(!isset($_SESSION["myusername"]) && !isset($_SESSION["mypassword"])){
header("Location:mainlogin.html");
exit();
}
?>

<html>

<div>Login Successful</div>

</html>
