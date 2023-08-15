
<?php
include("login.php"); 


if($_SESSION['name']==''){
	header("location: signup.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<header>
        <div class="logo">Anna <b style="color: #FF7518;">Daata</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html" >About</a></li>
                <li><a href="contact.html"  >Contact</a></li>
                <li><a href="profile.php"  class="active">Profile</a></li>
                <li><a href="Help.html">Help</a></li>
            </ul>
        </nav>
    </header>
    <p style="margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; background-color: #f0f0f0;">
      <div style="width: 100%; height: 8px; background-color:  #FF7518;"></div>
    <script>
        hamburger=document.querySelector(".hamburger");
        hamburger.onclick =function(){
            navBar=document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
  
    
    



    <div class="profile">
    
        <div class="profilebox" style="">
          
            <p class="headingline" style="text-align: left;font-size:30px;"> <img src="" alt="" style="width:40px; height:  height: 25px;; padding-right: 10px; position: relative;" >Profile</p>

              <br>
              <div class="info" style="padding-left:10px;">
              <p style="">Name  :<?php echo"". $_SESSION['name'] ;?> </p><br>
              <p style="">Email :<?php echo"". $_SESSION['email'];?> </p><br>
              <p style="">Gender:<?php echo"". $_SESSION['gender'] ;?> </p><br>
               <?php echo"". $_SESSION['gender'] ;?> </p><br>  
              
              <a href="logout.php" style="float: left;margin-top: 6px ;border-radius:5px; background-color: #FF7518; color: white;padding: ;padding-left: 10px;padding-right: 10px;">Logout</a>
              </div>
              <br>
              <br>

            
            
         
         <br>
        
         </div>
   </div>          

        </div>



    
     

    </div>


   
    
    
</body>
</html>