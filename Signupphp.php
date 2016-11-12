<?php
   session_start();
   include("Config.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      $myemail = $_POST['email']; 
      
     //$sql = "SELECT username,password FROM loginids WHERE username = '".$myusername."'";
     //  $result = mysqli_query($db,$sql);
     //  $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
     // if($count==1){

      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      //push comment into database

      $result = mysqli_query($db,'INSERT INTO loginids(username,password,email) VALUES ("'.$myusername.'","'.$mypassword.'","'.$myemail.'")');
      // $_SESSION['flag']=20;
      if($result)
      {
         $_SESSION['sign']="Sign Up successful!";
        // echo"<script> alert('". $_SESSION['sign']."')</script>";
         header("location: contactus2.php");
      }
      else
      {
         $_SESSION['sign']="Sign Up unsuccessful!";
         //echo"<script> alert('". $_SESSION['sign']."')</script>";
         header("location: SignUp.html");
      }
      
  }

    /*  }
      else {
         $_SESSION['flag']=10;
         $_SESSION['error'] = "Your Login Name or Password is invalid";
         //echo "<br><br><div style = 'font-size:30px; margin-top:10px'>".$error."</div>";
         //echo "<br><a href='contactus2.php'><div style = 'font-size:20px; margin-top:10px'>Click here to go back</div></a>";
         header("location: contactus2.php");
      }
   }*/
?>
