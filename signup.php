
<!DOCTYPE html>
<html>
<head>
	<title>Football Premier League</title>		
	<link rel="icon" type="image/png" href="img/favicon.jpg"/>
	<link href="style2.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
         function validate()
         {
         
            if( document.myForm.name.value == "" )
            {
               alert( "Please provide your Name!" );
               document.myForm.name.focus() ;
               return false;
            }
            else
            {

               var name=document.getElementById("name").value;
                    var array=[];
                    var i;
                    array=name.split('');
                    var x='.';
                    for(i=0;i<=array.length;i++)
                    {

                         if(array[i]!='.'){
                             if((array[i]<'A' || array[i]>'Z') && (array[i]< 'a' || array[i]>'z')){

                                
                            alert( "Invalid character in your name!" );
                          document.myForm.name.focus();
                            return false;                           }
                         }


                    }
               

            }
                     
           

            if( document.myForm.username.value == "" )
            {
               alert( "Please provide Username!" );
               document.myForm.username.focus() ;
               return false;
            }


            else
            {

               var name=document.getElementById("username").value;
                    var array=[];
                    var i;
                    array=name.split('');
                    var x='.';
                    for(i=0;i<=array.length;i++)
                    {

                         if(array[i]!='.'){
                             if((array[i]<'A' || array[i]>'Z') && (array[i]< 'a' || array[i]>'z')){

                                
                            alert( "Invalid character in your username!" );
                          document.myForm.username.focus();
                            return false;                           }
                         }


                    }
               

            }

              
              if(document.myForm.phone.value=="")
              {
                   alert("Please Enter the Phone Number");
                   document.myForm.phone.focus();
                   return false;
              }

            if( document.myForm.email.value == "" )
            {
               alert( "Please provide your Email!" );
               document.myForm.email.focus() ;
               return false;
            }
            else{
          

                    var email = document.getElementById('email');
                    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    if (!filter.test(email.value)) {
                           alert('Please provide a valid email address');
                         return false;
                         document.myForm.email.focus() ;

                    }
            
            }
            if(document.myForm.dob.value=="")
            {

                 alert("Please enter the date of birth");

            }



       }

               function getAge(birth) {

               var today = new Date();
               var nowyear = today.getFullYear();
               var nowmonth = today.getMonth();
               var nowday = today.getDate();

               var birthyear = birth.getFullYear();
               var birthmonth = birth.getMonth();
               var birthday = birth.getDate();

               var age = nowyear - birthyear;
               var age_month = nowmonth - birthmonth;
               var age_day = nowday - birthday;
             
               if(age_month < 0 || (age_month == 0 && age_day <0)) {
                         age = parseInt(age) -1;
                    }
                    return age;
          }
          
          function validage()
          {
          var lre = /^\s*/;
          var inputDate = document.getElementById("dob").value;  
          inputDate = inputDate.replace(lre, "");
          var age2=getAge(new Date(inputDate));
          if(age2>0){
          document.getElementById("age").value=age2;
          }
          else document.getElementById("age").value=0;
          }

         </script>

</head>
<body>

    <?php

  $nameerr=$usernameerr=$emailerr=$phoneerr=$doberr=$gendererr="";
  $name=$username=$email=$phone=$dob=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

  if(empty($_POST["name"]))
      {
        
        $fnameerr="Name is required";


      }
      else
      {
               $name=test_input($_POST["name"]);
                  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                    $nameerr = "Only letters and white space allowed"; 
                   }

      }

      

    if(empty($_POST["username"]))
      {
        
        $usernameerr="UserName is required";


      }
      else
      {

        $username=test_input($_POST["username"]);
            
                if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameerr = "Only letters and white space allowed"; 
    }



      }
          if(empty($_POST["phone"]))
      {
        
        $identityerr="Phone Number is required";


      }



        if (empty($_POST["email"])) {
         $emailerr = "Email is required";
      } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format"; 
        }
      }


        if(empty($_POST["dob"]))
      {
        
        $doberr="Date of birth required";


      }
      else
      {

                  $dob=$_POST["dob"];
      }


    $age=$_POST["age"];
    
     $semister="1";
     $cgpa=0.0;

     $con=new mysqli("localhost","root","","fpl");
     $sql= 'INSERT INTO new_users(`name`,`username`,`email`,`dob`, `age`,`phone`,`gender`) 
         VALUES(\''.$name.'\',\''.$username.'\',\''.$email.'\',\''.$dob.'\',\''.$age.'\',\''.$phone.'\',\''.$gender.'\')';
      $result=$con->query($sql);
      if(!$result)
      {

      echo "<script type='type/javascript'>";
      echo "Insertion Error";
      echo "</script>";
  }
  else{
        $sql1 = 'INSERT INTO users (`email`, `password`) VALUES (\''.$email.'\',"12345")';
        $result1=$con->query($sql1);
        $con->close();
            echo "<script type='text/javascript'>";

    echo "alert('Signed Up Successfully')";

    echo "</script>";
   }
     
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

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
                        <div class="sign">
                        <h1>Personal Information!!!!</h1></br></br>
                        <form action=""  method="post"  name="myForm" onsubmit="return validate();" >

                            Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                            <input type="text" name="name" id="name">
                            <span class="error"><?php echo $nameerr;?></span>
                            <br><br>
                            User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                            <input type="text" name="username" id="username">
                            <span class="error"> <?php echo $usernameerr;?></span>
                            <br><br>

                            Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                            <input type="text" name="email" id="email">

                            <span class="error"> <?php echo $emailerr;?></span>
                            <br><br>
                            
                            Date Of Birth&nbsp;&nbsp;:&nbsp;&nbsp;<input type="date" name="dob" id="dob" onchange="validage();">
                            <span class="error"> <?php echo $doberr;?></span>
                            
                            <br><br>
                            Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                            <input type="text" name="age" id="age" readonly>
                            <br><br>
                            Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                            <input type="text" name="phone" id="phone">
                            <span class="error"> <?php echo $phoneerr;?></span>
                            <br><br>
                            Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;

                            <input type="radio" name="gender" value="male" checked> Male<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female"> Female<br>
                            
                            <span class="error"><?php echo $gendererr;?></span>
                            
                            <br><br>
                               

                            <input type="submit" value="Sign Up Now!!!">
                      </form>
                        
                    </div>      
                 </div>
                </div>

</body>
</html>