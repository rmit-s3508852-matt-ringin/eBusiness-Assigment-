<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Login/Register</title>
 </head>
 <body>


    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Login/Register </div>

        <div class="pageBreak"></div>

        <div class="loginBox">
        <form action="' . $_SERVER['PHP_SELF'] . '"
            method="POST">
            Username: <input type="text"
            name="username" />
            <br />
            Password: <input type="password"
            name="password" />
            <br />
            <input type="submit" value="Login" />
        </form>
        </div>
    </div>


 </body>



</html>