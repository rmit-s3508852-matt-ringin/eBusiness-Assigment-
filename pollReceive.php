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
            <p class="orderDetails"> Than you for taking the time to do the poll.</p>  
            <p class="orderDetails"> Your submitted answers are below</p>
            <p class="orderDetails1"><b> You liked the sites design: </b> <?php echo $_POST['design']; ?> </p>
            <p class="orderDetails1"><b> You found the site easy to nagivate: </b> <?php echo $_POST['nagivate']; ?> </p>
            <p class="orderDetails1"><b> You are likely to return to this site: </b> <?php echo $_POST['return']; ?>  </p> 
            <p class="orderDetails1"><b> Feedback: </b> <?php
            $feedback = $_POST['feedback']; echo wordwrap ($feedback, 55, "<br>\n"); ?>  </p> 

        
        </div>


    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>