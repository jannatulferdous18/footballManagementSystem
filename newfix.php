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
                    <li><a href="signin.php">Sign In</a></li>&nbsp; &nbsp; &nbsp; 
                </ul>
            </div>  
    </div>
    <div class="fix1">

<?php





  $con=new mysqli("localhost","root","","fpl");
 
  $var=$_POST["s_team"];
  
  echo $var;

  $sql1="select * from fixtures where home_team='$var' OR away_team='$var' ";
  $result1=$con->query($sql1);
  if($result1->num_rows>0)
  {
  echo "<table border='1'>";
  echo "<tr>"."<td>"."Home Club"."</td>"."<td>"."Away Club"."</td>"."<td>"."Stadium"."</td>"."<td>"."date"."</td>"."</tr>";
  foreach($result1 as $r)
  {
    echo "<tr>"."<td>".$r["home_team"]."</td>"."<td>".$r["away_team"]."</td>"."<td>".$r["stadium_name"]."</td>"."<td>".$r["date"]."</td>"."</tr>";

  }

  echo "</table>";

    
  }





?>
</div>
    
</body>
</html>
