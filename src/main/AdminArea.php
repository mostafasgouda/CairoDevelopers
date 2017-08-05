<?php
require_once 'dbconnect.php';

//$query = "SELECT * FROM loans WHERE email = '$myemail' AND password = '$mypassword' ";
                
        
  //          $result = mysqli_query($conn, $query);
             
        

        //    $user=$result->fetch_assoc();


//if ($_POST['action'] == 'profileseen') {
    
    //action for update here
//} else if ($_POST['action'] == 'profileacceptance') {
    //action for delete
//}else if ($_POST['action'] == 'profiledone') {
    //action for delete
//}


$result = $conn->query("SELECT COUNT(*) FROM `loans` WHERE `profiledone`=0");
$row = $result->fetch_row();
$rowsnumber=$row[0];
//echo $rowsnumber;
?>

<!DOCTYPE html>
<html>
    <head>
    
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="../../CSS/min.css" />
</head>
        <body>
    <div class="container">
    <h1 class="welcome text-center">Bank Application<br> Easy Loans </h1>
        <div class="Admincontainer">
        <h2 class='login_title text-center'>Admin Area</h2>
        <a name="logout" id="login" href=../../index.php>logout</a>
        <hr>
            <form class="form-signin" action=AdminArea.php method="post">
            <table class='admintable'>
                 <tr>
                 <th align="center">ID</th>
                 <th align="center">Name</th>
                 <th align="center">Email</th>
                 <th align="center">Mobile</th>
                 <th align="center">Project Type</th>
                 <th align="center">Project Name</th>
                 <th align="center">Project Location</th>
                 <th align="center">Loan Amount</th>
                 <th align="center">Loan Duration</th>
                 <th align="center">User Comments</th>
                 <th align="center">Data of Loan</th>
                 <th align="center">Project Review Status</th>
                 <th align="center">Project Acceptance</th>
                 <th align="center">Project Done</th>
                </tr>
                
                
                    <?php
                        $query = "SELECT * FROM loans WHERE `profiledone`=0 ";
                        $result = mysqli_query($conn, $query);
                        //$user=$result->fetch_assoc();
                    
                    
                if(mysqli_num_rows($result) >= 1)
                     {

                    while($row = mysqli_fetch_array($result))
                    {
                    
                    echo "<tr><td>"; 
                    echo $row['ids'];
                    echo "</td><td>";   
                    echo $row['name'];
                    echo "</td><td>";    
                    echo $row['email'];
                    echo "</td><td>";    
                    echo $row['mobile'];
                    echo "</td><td>";    
                    echo $row['projecttype'];
                    echo "</td><td>";    
                    echo $row['projectname'];
                    echo "</td><td>";    
                    echo $row['projectlocation'];
                    echo "</td><td>";    
                    echo $row['loanamount'];
                    echo "</td><td>";    
                    echo $row['duration'];
                    echo "</td><td>";    
                    echo $row['usercomment'];
                    echo "</td><td>";    
                    echo $row['date'];
                    echo "</td><td>";
                        if ($row['profileseen']==1){
                            echo "Project Viewed " ;
                        }else{
                            echo "Not yet" ;
                            echo "<input type='submit' name='action' data-value= value='profileseen' />";
                        }
                    
                    echo "</td><td>";
                        if ($row['profileacceptance']==1){
                            echo "Project Accepted " ;
                        }else{
                            echo "Not yet" ;
                            echo "<input type='submit'' name='action' value='profileacceptance' />";
                        }
                    
                    echo "</td><td>";  
                         if ($row['profiledone']!=1){
                           echo "Not yet" ;
                            echo "<input type='submit'' name='action' value='profiledone' />";
                        }
                    
                    
                    echo "</td></tr>";
                     
                    }
                }
                    ?>
            </table> 
            </form>
        </div><!-- /card-container -->
    </div><!-- /container -->
    </body>    
</html>