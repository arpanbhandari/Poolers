<?php
session_start();
$_SESSION['date']=$_POST['date'];
$_SESSION['time']=$_POST['time'];
$_SESSION['typeOfPool']=$_POST['typeOfPool'];
$_SESSION['phoneNumber']=$_POST['phoneNumber'];
?>



<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
     
     </head>
    
    
    
    
    <body style="background-image:url('http://www.esc.cam.ac.uk/esc/images/Department/library/Areas%20Mapped%20by%20Part%20II%20Earth%20Sciences%20Students,%20Cambridge%20-%20Google%20Maps%20-%20Googl_2012-10-10_10-49-24.png'); opacity:1.5; background-size: cover; background-repeat:repeat;">
       
        
        <!--NAVBAR-->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="landingPage.php">Poolers</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                      <li  ><a href="aboutUs.html">About Us</a></li>
                      <li ><a href="contactUs.html" >Contact Us</a></li>
                      <li><a href="FAQ.html">FAQ</a></li>
                      <li><form action="queryPoolStatus.php"><input type="submit" value="Current Pool Status!" class="btn btn-primary" style="margin-top:8px;"></form></li>
                       
                      <li><a class="gb_Mb gb_Tb gb_R" id="gb_71" href="https://accounts.google.com/Logout?hl=en&amp;continue=https://www.google.co.in/%3Fgfe_rd%3Dcr%26ei%3DMRpRU9_3JKTO8gf_woDwDA" target="_top">Sign out</a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
        
        
        
        <!-- Table -->
        <div style="height:475px; width:300px; margin-top:20px; margin-left:auto; margin-right:auto; background-color:#101010; color:#ffffff; text-align:center;border:2px solid black; border-radius:25px;">
            <!-- Default panel contents 
                  <div class="panel-heading">Panel heading</div>
                  <div class="panel-body">
                    <p>...</p>
                  </div>-->

                  <!-- Table -->
                  <table class="table" >
                      <caption style="text-align:center;color:white;"><b>Summary:</b></caption>
                    <tr>
                      <th style="color:white;">Source</td>
                      <td style="color:white;"><?php echo $_SESSION['source'];?></td> 
                    </tr>
                    <br>
                    <tr>
                      <th style="color:white;">Destination</td>
                      <td style="color:white;"><?php echo $_SESSION['destination'];?></td> 
                    </tr>
                    <br>
                    <tr>
                      <th style="color:white;">Date</td>
                      <td style="color:white;"><?php echo $_SESSION['date'];?></td> 
                    </tr>
                    <br>
                    <tr>
                      <th style="color:white;">Time</td>
                      <td style="color:white;"><?php echo $_SESSION['time'];?></td> 
                    </tr>
                    <tr>
                      <th style="color:white;">Type Of Pool</td>
                      <td style="color:white;"><?php echo $_SESSION['typeOfPool'] ?> </td> 
                    </tr>
                    <tr>
                      <th style="color:white;">Phone Number</td>
                      <td style="color:white;"><?php echo $_SESSION['phoneNumber'] ?> </td> 
                    </tr>
                  </table>
<br>
            <form action="index2.php" method="post" >
                <span id="phoneNumber" name="phoneNumber" style="visibility:hidden"></span>
                <input type="submit" class="btn btn-info btn-md" value="Confirm" style="width:120px; margin-left:50px; ">
            </form>   
        </div>
        
        
    </body>
	
</html>
