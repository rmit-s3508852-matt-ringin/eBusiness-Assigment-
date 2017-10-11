<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header1.php"; ?>
  <title>Register</title>
 </head>
 <body>


    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Register </div>

        <div class="pageBreak"></div>

        <div class="loginBox">
        <form action="' . $_SERVER['PHP_SELF'] . '" method="POST">
            Full name: <input type="password" name="name" required> <br/>
            Address: <input type="password" name="adress" required> <br/>
            Username: <input type="text" name="username" min = '5' required> <br/>
            Password: <input type="password" name="password" required> <br/>
            <button class="loginButton" type="submit" onclick="hash()">Submit</button>
        </form>
        </div>
    </div>


 </body>



</html>