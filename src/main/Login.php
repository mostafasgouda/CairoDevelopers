<?php
session_start();
require_once 'dbconnect.php';

        $myemail = mysqli_real_escape_string($conn,$_POST['email']);
            $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 



            $query = "SELECT * FROM loans WHERE email = '$myemail' AND password = '$mypassword' ";
                
        
            $result = mysqli_query($conn, $query);
             
        

            $user=$result->fetch_assoc();
            $_SESSION['id'] = $user['ids'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['profileseen'] = $user['profileseen'];
            $_SESSION['profileacceptance'] = $user['profileacceptance'];
            $_SESSION['date'] = $user['date'];

            if ($myemail=='admin@cairodevelopers.com' && $mypassword=='expressloan'){
            
                header( 'Location:  AdminArea.php' ); 
                }
            elseif ($result->num_rows != 0 ) {
                //echo "<p>db conected true</p>";
                
                //echo $_SESSION['id'];
                header( 'Location: userpage.php' );
                //echo $result->num_rows  ;
                //echo $user['email'];
                    
                }
            
            else {
                    header( 'Location: failedlogin.html' );
                    //echo "<p>There was a problem signing you up - please try again later.</p>";
                //echo $myemail;
                //echo $mypassword;
                }

   
?>