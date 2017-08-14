<?php
require_once'AdminArea.php';
$id = 0;

if( assert($_POST['submit']) && $_POST['submit']=='profileseen'){
          
          $id= $_POST['idprofileseen'];
          echo $id;
          echo "hamada";
          
          $query = "UPDATE loans SET profileseen= 1 WHERE ids=$id";
                        
            mysqli_query($conn, $query);
                    
      }
  if( assert($_POST['submit']) && $_POST['submit']=='profileacceptance'){
          
          $id= $_POST['idprofileacceptance'];
          echo $id;
      echo "dah hamada";
          $query = "UPDATE loans SET profileacceptance= 1 WHERE ids=$id";
                        
            mysqli_query($conn, $query);
                    
      }

  if( assert($_POST['submit']) && $_POST['submit']=='profiledone'){
          
          $id= $_POST['idprofiledone'];
          echo $id;
      echo "dah f3lan hamada";
          $query = "UPDATE loans SET profiledone= 1 WHERE ids=$id";
                        
            mysqli_query($conn, $query);
                    
      }
    

    ?>
