<?php 
require_once 'dbconnect.php';
session_start();


//$query = "SELECT * FROM loans WHERE ids = '$id' ";
//$result = mysqli_query($conn, $query);
//$user=$result->fetch_assoc();
?>



<!DOCTYPE html>
<html>
    <head>
     <script>try{Typekit.load({ async: true });}catch(e){}</script>
     <link rel="stylesheet" href="../../CSS/min.css" />
</head>
        <body>
            
            <div class="container">
                <h1 class="welcome text-center">Bank Application<br> Express Loan </h1>
                <div class="card card-container">
                    <h2 class='login_title text-center'>Welcome <?php echo $_SESSION['name']?></h2>
                    <a name="logout" id="login" href=../../index.php>logout</a>
                    <hr>
             

                <table>
                <tr>
                  <th align="center">ID</th>
                  <th align="center">Name</th>
                  <th align="center">Project Review Status</th>
                  <th align="center">Project Acceptance</th>
                  <th align="center">Data of Loan</th>
                  
                </tr>
                <tr>
                  <td align="center"><?php echo $_SESSION['id']?></td>
                  <td align="center"><?php echo $_SESSION['name']?></td>
                  <td align="center"><?php if($_SESSION['profileseen']==1){?>
                      <p class="Pojectstatusok"><?php echo "Project Viewed";?></p>
                      <?php
                    }  
                      else{
                          ?><p class="Pojectstatusnotyet"><?php echo "Not yet";?></p>
                      <?php
                      }
                      ?></td>
                  
                    <td align="center"><?php if($_SESSION['profileacceptance']==1){?>
                      <p class="Pojectstatusok"><?php echo "Loan Order Accepted";?></p>
                      <?php
                    }  
                      else{
                          ?><p class="Pojectstatusnotyet"><?php echo "Not yet";?></p>
                      <?php
                      }
                      ?></td>
                  <td align="center"><?php echo $_SESSION['date']?></td>
                  
                </tr>
                </table>

            
        </div><!-- /card-container -->
    </div><!-- /container -->
            
            
            
            
            
            
            
            
            
            
            
            
            
   
    </body>    
</html>