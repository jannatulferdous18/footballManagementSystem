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


    if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $oldpassword = $_POST["cur_pass"];
    $newpassword= $_POST["new_pass"];
    $confirm_password = $_POST["confirm_pass"];
    $email = $_SESSION["email"];
$con =new mysqli("localhost","root","","fpl");

if (!$con)
 {
die('Could not connect');
  }

  $select="SELECT * from users where email='$email'"; 

  $res=$con->query($select);

  foreach($res as $val)
  {
      $p=$val["password"];
  }
  if($newpassword==$confirm_password && $p==$oldpassword)
    {
  $insert=$con->query("UPDATE users set password='$confirm_password' where email='$email'"); 
  }

  if($insert)
  {

   echo "<script type='text/javascript'>";

    echo "alert('Password has been changed')";

    echo "</script>";
    }
  else
    {
      echo "<script type='text/javascript'>";

    echo "alert('Something went wrong')";

    echo "</script>";
    }

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
    <div class="cpass">
    <form method="POST" action="#">

   Current Password&nbsp;&nbsp;&nbsp;:&nbsp;
   <input type="password" id="cur_pass" name="cur_pass"/></br>

   New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
   <input type="password" id="new_pass" name="new_pass"/></br>

   Confirm Password&nbsp;&nbsp;:&nbsp;
   <input type="password" id="confirm_pass" name="confirm_pass"/></br>


    <button>Change</button>
    </form>
    </div>
  

</body>
</html>