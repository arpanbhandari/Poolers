



<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
		
            function validatorForDateTime(){
                if(document.getElementById("date").value===""){
                    alert("Please enter the DATE!");
                    return false;
                }
                
                if(document.getElementById("time").value===""){
                    alert("Please enter the TIME!");
                    return false;
                }
                
                else{
                    //window.open("verify.php");
                    //prompt("We need your phone number :)","");
                    return true;
                }
            }
        </script>
		
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" ></script>
        
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
        
        
        
        <!-- FORM -->

        <div style="height:200px; width:360px; color:#999999; margin-top:200px; margin-left:auto; margin-right:auto; background-color:#101010;padding:5px; text-align:center;">
            <span style=""><b>Current Pools:</b></span><br><br>
            <p><?php
                session_start();
                include('connection.php');
                $email=$_SESSION['email'];
             //   $result = mysqli_query($connect,"SELECT * from pool where source='$source' AND destination='$destination' AND date='$date' AND time='$time' ;" );
                $result = mysqli_query($connect,"SELECT source, destination, date, time, typeOfPool FROM pool WHERE emailID='$email';" );
                $count=0;
                
                
                while($row=mysqli_fetch_array($result)){
                    echo "Source:   " . $row['source'];
                    echo "<br>";
                    echo "Destination:   " . $row['destination'];
                    echo "<br>";
                    if($row['typeOfPool'] == 'Share Ride'){$typeofpool=" OFFERING a Ride ";echo "Type of Pool:   " . $typeofpool;}
                    echo "<br>";
                    if($row['typeOfPool'] == 'Find Ride'){$typeofpool=" OFFERING a Ride ";echo "Type of Pool:   " . $typeofpool;}
                    echo "<br>";
                    echo "Date: " . $row['date'];
                    echo "<br>";
                    echo "Time: " . $row['time'];
                    
                    $count++;
                    
                    /*if($row['emailID']==$email)continue;
                    echo "<br>";
                    if($row['typeOfPool'] == 'Share Ride')$typeofpool=" OFFERING a ride at ";
                    if($row['typeOfPool'] == 'Find Ride')$typeofpool=" NEEDS a ride at ";
                    
                    echo $row['emailID'] . $typeofpool . $row['time'] . " hrs.";
                    $count++;*/
                }
                if($count==0)echo "You are not pooling with anyone! Click on Poolers to pool!";
                $_SESSION['result'] = $result;
                //header("Location: confirmation.html");
                ?></p>
            
        </div>
        
    </body>
    
</html>
