<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header1.php"; ?>
  <title>Edgy Prints - Register</title>
 </head>
 <body>


    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Edgy Prints - Register </div>

        <div class="pageBreak"></div>

        <div class="loginBox">
         <form action="registerReceive.php" method="POST">
            Full name: <input type="text" name="name" required> <br/>
            Address: <input type="text" name="address" required> <br/>
            Email: <input type="email" name="email" required> <br/>
            Username: <input type="text" name="username" required> <br/>
            Password: <input type="password" name="password" pattern=".{6,}" required title="Must be 6 or more characters"> <br/>
            Would you like to be signed up to our newsletter?:  
            <fieldset id="group1" required>
                <input type="radio" name="newsletter" value="yes" required>
                <label for="always">Yes</label>
                <input type="radio" name="newsletter" value="no">
                <label for="always">No</label>
            </fieldset> <br/>
            <button class="loginButton" type="submit">Submit</button>
        </form>
        <p class="registerLink">Back to <a href ="login.php">login</a> </p>
        </div>
    </div>


 </body>
 <?php include "sections/footerLogin.php"; ?>
</html>