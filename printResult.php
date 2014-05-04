<?php
session_start();
$_SESSION['date']=$_POST['date'];
$_SESSION['time']=$_POST['time'];
?>



<html>
    <head>
        <link type="text/css" rel="stylesheet" href="bootstrap.css" media="screen">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="custom.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
     </head>
    
    
    
    
    <body style="background-image:url('http://www.esc.cam.ac.uk/esc/images/Department/library/Areas%20Mapped%20by%20Part%20II%20Earth%20Sciences%20Students,%20Cambridge%20-%20Google%20Maps%20-%20Googl_2012-10-10_10-49-24.png'); opacity:1.5; background-size: cover; background-repeat:repeat;">
       
        
        
        
        
        
        <!-- NAVBAR -->
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
                    <a class="navbar-brand" href="#">Poolers</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                      <li  ><a href="#">About Us</a></li>
                      <li ><a >Contact Us</a></li>
                      <li><a href="#">FAQ</a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
        
        
        <!-- Table -->
        <div style="height:315px; width:300px; margin-top:150px; margin-left:auto; margin-right:auto; background-color:#101010; color:#ffffff; text-align:center;border:2px solid black; border-radius:25px;">
            <!-- Default panel contents 
                  <div class="panel-heading">Panel heading</div>
                  <div class="panel-body">
                    <p>...</p>
                  </div>-->

                  <!-- Table -->
                  <table class="table" >
                      <caption style="text-align:center;color:white;"><em>Summary:</em></caption>
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
                      <td style="color:white;">Share my ride!(dumy)</td> 
                    </tr>
                  </table>
                
        </div>
        <form></form>
        
    </body>
	
</html>
