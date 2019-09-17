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
    <title></title>
    <link rel="icon" type="image/png" href="img/favicon.jpg"/>
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
 

    <?php include 'head1.php'; ?>
    <?php include 'v_menu2.php'; ?>
    <div class="fix">

      <?php

    $con=new mysqli("localhost","root","","fpl");
    $sql="SELECT * from new_users";
    $res=$con->query($sql);

     echo "<table>";

     echo "<tr>";
     echo "<th>"."Name"."</th>";
     echo "<th>"."Username"."</th>";
     echo "<th>"."Email"."</th>";
     echo "<th>"."Birthday"."</th>";
     echo "</tr>";
    foreach($res as $row)
    {
      $name=$row["name"];

      echo "<tr>";
     
     
     echo "<td>".$name."</td>";
     echo "<td>".$row["username"]."</td>";
     echo "<td>".$row["email"]."</td>";
     echo "<td>".$row["dob"]."</td>";
     
      echo "</tr>";
     
     
    }

     echo "</table>";

?>

    </div>

</body>
</html> 

