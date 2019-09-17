<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="icon" type="image/png" href="img/favicon.jpg"/>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <div id="profile">
<?php

	 $email= $_SESSION["email"];
     $con=new mysqli("localhost","root","","fpl");
     $sql="SELECT * from new_users where email='$email'";
     $results=$con->query($sql);
     echo "<div class='prof'>";
     foreach($results as $row)
     {
     	$name=$row["name"];
     	echo "Name         :  ".$name."<br>";
     	echo "User Name           :  ".$row["username"]."<br>";
     	echo "E-mail     :  ".$row["email"]."<br>";
     	echo "Birthday         :  ".$row["dob"]."<br>";
     	echo "Age          :  ".$row["age"]."<br>";
     	echo "Gender  :  ".$row["gender"]."<br>";
     	

     }
     echo "</div>";

?>


</div>


</body>
</html>