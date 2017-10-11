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
        
        <div class="contactBox">
        <div class="contactIntro"> 
           Edgy Prints is an Australian based company.<br> You can contact us by phone during open hours (9am-5pm AEST) or anytime by Email.
           <b>Contact us:</b><br>
            <b> Phone: </b> (03) 9543 5234 <br>
            <b> Email: </b> support@edgyprints.com <br>
             Below is a map of our location and a quick way to contact us
        </div>
        <iframe class="map" width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=melbourne%20central&key=AIzaSyCwX7d3nd5hYDawEvLAfR52iNaZPHHpvtU" allowfullscreen></iframe>
        
        <div class="emailWrapper">
        <form action="contactUsReceive.php" method="post" class ="emailForm">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required><br>
            <label for="mail">Email</label>
            <input type="email" name="mail" placeholder="Enter your email" required><br>
            <label for="comment">Comment</label>
            <textarea rows="5" cols="50" name="comment" id="comment" placeholder="Enter your commment" required></textarea><br><br>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
        </div>

        	 
        </div>
        </div>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>