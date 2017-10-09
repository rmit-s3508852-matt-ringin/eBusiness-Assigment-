<!DOCTYPE html>

<html>
 <head>
  <?php include "sections/header.php"; ?>
  <title>Checkout</title>
 </head>
 <body>

    <?php include "sections/navbar.php"; ?>

    <div class = "main">
        
        <img src="images/logo.png" alt="Edgy prints logo" class="logoHome">
        <div class = "welcome"> Checkout </div>

        <form action="mailto:youremailaddress" method ="post">
            <script type="text/javascript">
            CheckoutCart();
            </script>
            <br /><br />
            Name: <input type="text" name="b_first" />
            <input type="text" name="b_last" /><br />
            Email: <input type="text" name="b_email" /><br />
            <br /><br />
            Other form data can go here when you create your prototype cart ...
            <br /><br />
            <input type="submit" value=" Submit Order " />
        </form>

         <div class="pageBreak"></div>

    </div>


 </body>


 <?php include "sections/footer.php"; ?>

</html>