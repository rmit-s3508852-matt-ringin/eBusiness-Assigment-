<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header1.php"; ?>
  <title>Login</title>
 </head>
 <body>


    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Login </div>

        <div class="pageBreak"></div>

        <div class="loginBox">
        <form action="' . $_SERVER['PHP_SELF'] . '" method="POST">
            Username: <input type="text" name="username"> <br>
            Password: <input type="password" name="password"> <br>
            <button class="loginButton" type="submit" onclick="hash()">Submit</button>
        </form>
         <p class="registerLink"> If you dont have an account, register <a href ="register.php">here</a> </p>
        </div>

    </div>


 </body>



</html>