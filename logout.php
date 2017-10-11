<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header1.php"; ?>
  <title>Edgy Prints - Logout</title>
 </head>
 <body>


    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Edgy Prints - Logout </div>

        <div class="pageBreak"></div>

        <div class="loginBox">
        <div class="confirmationBox">
        <?php
            unset($_SESSION['logged_in']);
        ?>

        <p> You are now logged out </p>
        <p class="registerLink">Return to <a href ="login.php">login</a> </p>
        </div>
        </div>

    </div>


 </body>
 <?php include "sections/footerLogin.php"; ?>
</html>