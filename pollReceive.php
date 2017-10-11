<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Poll summary</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main" id="cartPage">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Poll summary</div>

         <div class="pageBreak"></div>
       
        <div class="pollResults">
        <?php   
             
             $feedback = $_POST['feedback'];
              
              echo $_POST['design']; 
              echo '<br>';
              echo $_POST['nagivate'];
              echo '<br>';
              echo $_POST['return'];
              echo '<br>';
              echo wordwrap ($feedback, 55, "<br>\n");
              echo '<br>';

        ?>
        </div>


    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>