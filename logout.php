<?php

session_start();
unset($_SESSION["email"]);
$_SESSION["login"]=0;
header('location:index.php');

?>
</body>
</html>


   