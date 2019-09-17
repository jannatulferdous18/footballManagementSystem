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
$c=$conn->query($sql);

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
                    <li><a href="signin.php">Sign In</a></li>&nbsp; &nbsp; &nbsp;
                </ul>
            </div>  
    </div>
    <div class="fix">
  <form action="newfix.php" method="post" >
			<h2>Search Team:</h2>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="companynamedrop" name="s_team">
		<option value=""><h3>Select Club<h3></option>
			<?php 
		while ($row = $c->fetch_assoc()) {
        echo '<h3><option value="'.$row['club_name'].'">'.$row['club_name'].'</option></h3>';
		}
		?>
		</select>

			<input type="submit" value="Search">
			</div>
			<div class="fix1">
		</form>
		<?php
$con=new mysqli("localhost","root","","fpl");

   $sql= 'SELECT * from fixtures';
   $result=$con->query($sql);
  
  echo "<table border='1'>";
  echo "<tr>"."<td>"."Home Club"."</td>"."<td>"."Away Club"."</td>"."<td>"."Stadium"."</td>"."<td>"."date"."</td>"."</tr>";
  foreach($result as $r)
  {
  	echo "<tr>"."<td>".$r["home_team"]."</td>"."<td>".$r["away_team"]."</td>"."<td>".$r["stadium_name"]."</td>"."<td>".$r["date"]."</td>"."</tr>";

  }

  echo "</table>";

?>
		</div>
</body>
</html>
