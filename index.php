

<!DOCTYPE html>
<html>
    <head>
    
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel="stylesheet" href="CSS/min.css" />
</head>
        <body>
    <div class="container">
    <h1 class="welcome text-center">Bank Application<br> Express Loan </h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Login</h2>
        <hr>

            <form class="form-signin" action=src/main/Login.php method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input name="email"type="text" id="inputEmail" class="login_box" placeholder="user@cairodevelopers.com" required autofocus>
                <p class="input_title">Password</p>
                <input name="password" type="password" id="inputPassword" class="login_box" placeholder="******" required>
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button name="login" class="btn btn-lg btn-primary" type="submit" value="sublogin">Login</button>
               <!-- <button name="login" id="register" class="btn btn-lg btn-primary" type="submit" value="subregister">Register</button>-->
                <a name="login" id="register" href=src/main/subregister.html>Register</a>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    </body>    
</html>