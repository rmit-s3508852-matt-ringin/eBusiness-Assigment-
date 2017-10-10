<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Cart</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main" id="cartPage">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Cart </div>

         <div class="pageBreak"></div>

         <div class="cartBox"> 

          <form class ="cartForm" action="checkout.php" method="get" onsubmit="return ValidateCart(this)">
            <script type="text/javascript"> 
                ManageCart();
            </script>

            <input id = "cartCheckout" type="submit" value="Check Out" />
        </form>
        
        </div>
    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>