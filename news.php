<?php

    session_start();
    if(empty($_SESSION["email"]))
     {
          header('location:index.php');
     }
     if($_SESSION["login"]!=1)
     {
       header('location:index.php');    
     }


?>
<!DOCTYPE html>
<html>
<head>
  <title>Football Premier League</title>    
  <link rel="icon" type="image/png" href="img/favicon.jpg"/>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'head.php'; ?> 
 <?php include 'v_menu.php'; ?>
   
</body>
</html>


   