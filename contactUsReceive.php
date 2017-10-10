<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Confirmation</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class="main"> 
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class="welcome"> Confirmation </div>

        <div class="pageBreak"></div>
        
        <div class="contactIntro"> 
         <h3>Your comment has been succesfully sent </h3>
          <b> Name: </b> <?php echo $_POST["name"]; ?> <br>
          <b> Email: </b> <?php echo $_POST["mail"]; ?> <br>
          <b> Comment: </b> <?php echo $_POST["comment"]; ?> <br>
          <p> Thank you. We well get back to you as soon as possible. </p>
        </div>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>