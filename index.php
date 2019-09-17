<!DOCTYPE html>
<html>
<head>
	<title>Bangladesh Football League</title>		
	<link rel="icon" type="image/png" href="img/favicon.jpg"/>
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
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
    <div class="slider_image">
        <div id="slider_wrapper">
        <?php include 'slider.php'; ?>
        </div>
    </div>
    <div class="lnews_wrapper">
        <div class="lnews">
           <div class="card card-inverse card-danger text-xs-center">
                <div class="card-block">
                <blockquote class="card-blockquote">
                <ul id="example" >
                    <li data-update="item1"><img src="img/lnews1.jpg"></li>
                    <li data-update="item2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li data-update="item4"><img src="img/lnews2.jpg"></li>
                    <li data-update="item3">Sed et ipsum id justo viverra rutrum ac non sapien.</li>
    
                </ul>
                </blockquote>
                </div>
            </div> 
        </div>
    </div>
     <?php include 'footer.php'; ?>
  
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery.webticker.js"></script>
<script>
$("#example").webTicker({
    height:'200px'
});
$("#pause").click(function(){
    $("#example").webTicker('stop');
});
$("#resume").click(function(){
    $("#example").webTicker('cont');
});
$("#ease").click(function(){
    $("#example").webTicker('transition', 'ease');
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>