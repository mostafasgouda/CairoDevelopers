<!DOCTYPE html>
<html>
    <head>
    
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="../../CSS/min.css" />
</head>
        
<?php
require_once 'dbconnect.php';

    $name1= $_POST['name'];
    
    
    $date = date('m/d/Y h:i:s', time());
    
    
//    SELECT name FROM loans WHERE email LIKE $_POST['email']
    
   
    $sql = "INSERT INTO loans (name,email,mobile,password,projecttype,projectname,projectlocation,loanamount,duration,date,usercomment) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]' ,'$_POST[password]' ,'$_POST[projecttype]' ,'$_POST[projectname]' ,'$_POST[projectlocation]' ,'$_POST[loanamount]' ,'$_POST[duration]' , '$date'  ,'$_POST[usercomment]'  )";
    $statement = $conn->prepare($sql);

    $statement->execute();
    

?>
<body>
    <div class="container">
    <h1 class="welcome text-center">Bank Application<br> Express Loan </h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Welcome <?php echo $name1; ?></h2>
        <a name="login" id="register" href=../../index.php>Continue to login in</a>
        <hr>

            
        </div><!-- /card-container -->
    </div><!-- /container -->
    </body>    
</html>











    







