<?php
    
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
     $email=$_POST["email"];
     $password=$_POST["password"];
     
     $con=new mysqli("localhost","root","","fpl");
     $sql="SELECT * from users where email='$email' and password='$password'";
     $result=$con->query($sql);
     $row=mysqli_num_rows($result);
     echo $row;
     if($row==1)
     {
         if($email=="admin@gmail.com")
         {
            $_SESSION["email"]=$email;
            $_SESSION["login"]=1;           
             header('location:admin.php');
         }
         else
         {
             $_SESSION["email"]=$email;
            $_SESSION["login"]=1;
           
             header('location:viewr.php');
             
         }
         
     }
     else
     {
         echo "Wrong Username or Password";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Football Premier League</title>		
	<link rel="icon" type="image/png" href="img/favicon.jpg"/>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="css/screen.css" rel="stylesheet" media="screen,projection" />
<style>
.forms li {
  position: relative;
}
.show-password-link {
  display: block;
  position: absolute;
  z-index: 11;
}
.password-showing {
  position: absolute;
  z-index: 10;
}
</style>
</head>
<body>
<?php include 'head.php'; ?> 
     <div class="menu_wrapper">
        
            <div class="menu">
                
                <ul> 
                    <li><a href="index.php">Home</a></li>&nbsp; &nbsp; &nbsp;  
                    </li>&nbsp;
                    <li><a href="fixture.php">Fixtures</a></li>&nbsp; &nbsp; &nbsp;
                    <li class="dropdown1"><a href="gallery.php" class="dropbtn1">Gallery</a>&nbsp; &nbsp; &nbsp;<div class="dropdown-content1">
                    <a href="photo.php">Photo</a>  
                    <a href="video.php">Video</a>                  
                    </div>
                    <li><a href="news.php">News</a></li>&nbsp; &nbsp; &nbsp;
                    <li><a href="players.php">Players</a></li>&nbsp; &nbsp; &nbsp; 
                    <li><a href="result.php">Results</a></li>&nbsp; &nbsp; &nbsp;
                    <li><a href="stats.php">Stats</a></li>&nbsp; &nbsp; &nbsp;
                    <li class="dropdown"><a href="more.php" class="dropbtn">More</a><div class="dropdown-content">
                    <a href="info.php">Information</a>  
                    <a href="history.php">History</a>                  
                    </div>&nbsp; &nbsp; &nbsp;
                    <li><a href="signin.php">Sign In</a></li>&nbsp; &nbsp; &nbsp; 
                </ul>
            </div>  
    </div>
	<div class="myacc_wrapper">
        <div class="myacc">
            
        </div> 
    </div>
    <div class="menu2_wrapper">
        <div class="menu2">
            
        </div> 
    </div>
    <div class="formhd">
          <div class="formhd1">
              <form Name="name" Method="Post" ACTION="#">
                  <ol class="forms">
                  <li>
                    <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;Email</label>
                    <input type="email" name="email" id="email" />
                  </li>
                  <li>
                    <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;Password</label>
                    <input type="password" name="password" id="password" class="password" />
                  </li>
                  <li class="buttons">
                    <button type="submit">Submit</button>
                  </li>
                </ol>
              </form>
          </div>
          <div class="formhd2">
            <h1>Don't have a BFL account?</h1>
            <h2>In that case, you are missing out on:</h2></br>
            <h3>&nbsp;&nbsp;&nbsp;Fantasy Bangladesh Football League football game</br>
            &nbsp;&nbsp;&nbsp;Exclusive fan services</br>
            &nbsp;&nbsp;&nbsp;Customised site content</br>
            &nbsp;&nbsp;&nbsp;Favourite Club information and notifications</h3></br>
            <a href="signup.php"><img src="img/reg.png" width="500" height="42"></a>
          </div>
    </div> 

    <script src="js/jquery.js"></script>
<script src="js/jquery.showPassword.js"></script>
<script>
$(document).ready(function() {
  $(':password').showPassword({
    linkRightOffset: 5,
    linkTopOffset: 11
  });
});
</script>

</body>
</html>