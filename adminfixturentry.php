<?php


 echo   $_POST["hc"];
 echo  $_POST["ac"];
 echo  $_POST["s"];
 echo  $_POST["date"];
 if(strcmp($_POST["hc"],$_POST["ac"])==0)
 {
	echo "Same team";
 }
 else
 {

$con=new mysqli("localhost","root","","fpl");
     $sql= 'INSERT INTO fixtures(`home_team`,`away_team`, `date`,`stadium_name`) 
         VALUES(\''.$_POST["hc"].'\',\''.$_POST["ac"].'\',\''.$_POST["date"].'\',\''.$_POST["s"].'\')';
  $result=$con->query($sql);
  if(!$result)
  {

  	echo "<script type='text/javascript'>";

  	echo "alert('Insertion Error')";

  	echo "</script>";
  }
  else{
    echo "<script type='text/javascript'>";

    echo "alert('A match has been added')";

    echo "</script>";
   }
}