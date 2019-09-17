 <?php

$servername = "localhost";
$username = "root";
$password = "";
$db="fpl";
$conn = new mysqli($servername,$username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * FROM clubs";
$hclubnames=$conn->query($sql);

$aclubnames=$conn->query($sql);
$sql1="select distinct(stadium_name) from clubs ";
$s=$conn->query($sql1);

//$sql1="select catID,catname FROM category";
//$product1=$conn->query($sql1);
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
                    <li><a href="adminfixture.php">Add Fixture</a></li>&nbsp; &nbsp; &nbsp; 
                </ul>
            </div>  
    </div>
 
    </div>
    <div class="fixadmin">
    <form method="post"  name="myForm"  >

	Home Team&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
	<select   id="companynamedrop" name="hc">
		<option value=""><h3>Select Club<h/3></option>
			<?php 
		while ($row = $hclubnames->fetch_assoc()) {
        echo '<h3><option value="'.$row['club_name'].'">'.$row['club_name'].'</option></h3>';
		}
		?>
		</select>

	<br><br>
	Away Team&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
<select   id="companynamedrop" name="ac">
		<option value=""><h3>Select Club<h3></option>
			<?php 
		while ($row = $aclubnames->fetch_assoc()) {
        echo '<h3><option value="'.$row['club_name'].'">'.$row['club_name'].'</option></h3>';
		}
		?>
		</select>	
	<br><br>
	Stadium Name&nbsp;&nbsp;:&nbsp;&nbsp;
	<select   id="companynamedrop" name="s">
		<option value=""><h3>Select Stadiume</h3></option>
			<?php 
		while ($row = $s->fetch_assoc()) {
        echo '<h3><option value="'.$row['stadium_name'].'">'.$row['stadium_name'].'</option></h3>';
		}
		?>
		</select>
		<br><br>
		Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
		<input type="date" name="date"><br><br>
    <input type="submit" value="Add">
	</form>
</div>
</body>
</html>



<?php


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