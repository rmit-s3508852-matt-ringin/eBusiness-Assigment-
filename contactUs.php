<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Contact Us</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main" id="aboutPage"> 
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Contact Us </div>

        <div class="pageBreak"></div>

        <div class="contactIntro"> 
           Edgy Prints is an Australian based company.<br> You can contact us by phone during open hours (9am-5pm AEST) or anytime by Email.
           <b>Contact us:</b><br>
             Phone: (03) 9543 5234 <br>
             Email: support@edgyprints.com
        </div>
        
        <div class="emailWrapper">
        <form action="mailto:support@edgyprints.com" method="post" enctype="text/plain" class ="emailForm">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter your name"><br>
            <label for="mail">Email</label>
            <input type="email" name="mail" placeholder="Enter your email"><br>
            <label for="comment">Comment</label>
            <input type="text" name="comment" size="50" id="comment" placeholder="Enter your commment"><br><br>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
        </div>

        	 <iframe class="map" width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=melbourne%20central&key=AIzaSyCwX7d3nd5hYDawEvLAfR52iNaZPHHpvtU" allowfullscreen></iframe>
        </div>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>