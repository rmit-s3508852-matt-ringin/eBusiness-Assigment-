<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Checkout</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main cartPage">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Checkout </div>

        <div class="pageBreak"></div>

        <div class="checkoutBox cartPage">
            <div class="orderSuccess">
                <p>Congatulations! Your order was succesful.</p>  
                <p>The order details have also been sent to <?php echo $_POST['email']; ?> </p>
            </div>
            <script type="text/javascript">
            CheckoutCart();
            </script>
            <br/><br/>
            <p class="orderDetails"><b> Name: </b> <?php echo $_POST['name']; ?> </p>
            <p class="orderDetails"><b> Address: </b> <?php echo $_POST['address']; ?> </p>
            <p class="orderDetails"><b> Email: </b> <?php echo $_POST['email']; ?>  </p> 
            
            <form action="home.php">
            <input id="clickMe" type="submit" value="Back to home" onclick=" RemoveFromCart1(0);" />
            </form>
        </div>
         
    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>