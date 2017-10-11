<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Poll</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main" id="cartPage">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Poll </div>

         <div class="pageBreak"></div>

         <div class='pollBox'>
         <h2> Use the checkboxes below to complete the poll</h2>
          
         <div class ="innerPoll">
         <p class='pollQ'>You liked the sites design</p>
         <form action="pollReceive.php" id="poll" class="poll" method="post">
            <fieldset id="group1" required>
                <input type="radio" name="design" value="Agree" required>
                <label for="always">Agree</label>
                <input type="radio" name="design" value="Neither">
                <label for="always">Neither agree or diagree</label>
                <input type="radio" name="design" value="Disagree">
                <label for="always">Disagree</label>
            </fieldset>
            <p class='pollQ'>You found the site easy to nagivate</p>
            <fieldset id="group2">
                <input type="radio" name="nagivate" value="Agree" required>
                <label for="always">Agree</label>
                <input type="radio" name="nagivate" value="Neither">
                <label for="always">Neither agree or diagree</label>
                <input type="radio" name="nagivate" value="Disagree">
                <label for="always">Disagree</label>
            </fieldset>
            <p class='pollQ'>You are likely to return to this site</p>
            <fieldset id="group3">
                <input type="radio" name="return" value="Agree" required>
                <label for="always">Agree</label>
                <input type="radio" name="return" value="Neither">
                <label for="always">Neither agree or diagree</label>
                <input type="radio" name="return" value="Disagree">
                <label for="always">Disagree</label>
            </fieldset>
            <p class='pollQ'>List any feedback in the below box</p>
            <fieldset id="group4">
                <textarea rows="5" cols="50" name="feedback" value=""></textarea>
            </fieldset>
             <input type="submit" value="Submit">
        </form>
        </div>
        </div>



    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>